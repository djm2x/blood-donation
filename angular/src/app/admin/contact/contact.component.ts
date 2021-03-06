import { DetailMessageComponent } from './detail/detail.component';
import { Component, OnInit, ViewChild, EventEmitter } from '@angular/core';
import { MatPaginator, MatSort, MatDialog } from '@angular/material';
import { merge } from 'rxjs';
import { UowService } from 'src/app/services/uow.service';
import { Contact } from 'src/app/models/models';
import { DeleteService } from 'src/app/layouts/delete/delete.service';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.scss']
})
export class MessageComponent implements OnInit {
  @ViewChild(MatPaginator, { static: true }) paginator: MatPaginator;
  @ViewChild(MatSort, { static: true }) sort: MatSort;
  update = new EventEmitter();
  isLoadingResults = true;
  resultsLength = 0;
  isRateLimitReached = false;

  dataSource = [];
  columnDefs = [
    { columnDef: 'name', headName: 'NOM' },
    { columnDef: 'email', headName: 'EMAIL' },
    { columnDef: 'phone', headName: 'TEL' },
    { columnDef: 'message', headName: '' },
    { columnDef: 'option', headName: 'OPTION' },
  ].map(e => {
    e.headName = e.headName === '' ? e.columnDef.toUpperCase() : e.headName;
    return e;
  });

  displayedColumns = this.columnDefs.map(e => e.columnDef);

  constructor(private uow: UowService, public dialog: MatDialog, private mydialog: DeleteService, ) { }

  ngOnInit() {
    this.getPage(0, 10, 'id', 'desc');
    merge(...[this.sort.sortChange, this.paginator.page, this.update]).subscribe(
      r => {
        r === true ? this.paginator.pageIndex = 0 : r = r;
        !this.paginator.pageSize ? this.paginator.pageSize = 10 : r = r;
        const startIndex = this.paginator.pageIndex * this.paginator.pageSize;
        this.isLoadingResults = true;
        this.getPage(
          startIndex,
          this.paginator.pageSize,
          this.sort.active ? this.sort.active : 'id',
          this.sort.direction ? this.sort.direction : 'desc',
        );
      }
    );
  }

  getPage(startIndex, pageSize, sortBy, sortDir) {
    this.uow.contacts.getList(startIndex, pageSize, sortBy, sortDir).subscribe(
      (r: any) => {
        console.log(r.list);
        this.dataSource = r.list;
        this.resultsLength = r.count;
        this.isLoadingResults = false;
      }
    );
  }

  openDialog(o: Contact, text) {
    const dialogRef = this.dialog.open(null, {
      width: '750px',
      disableClose: true,
      data: { model: o, title: text }
    });

    return dialogRef.afterClosed();
  }

  add() {
    this.openDialog(new Contact(), 'Ajouter contact').subscribe(result => {
      if (result) {
        this.update.next(true);
      }
    });
  }

  edit(o: Contact) {
    this.openDialog(o, 'Modifier contact').subscribe((result: Contact) => {
      if (result) {
        this.update.next(true);
      }
    });
  }

  detail(o: Contact) {
    // this.openDialog(o, 'Modifier reservation').subscribe((result: Message) => {
    //   if (result) {
    //     this.update.next(true);
    //   }
    // });

    const dialogRef = this.dialog.open(DetailMessageComponent, {
      width: '750px',
      disableClose: false,
      data: { model: o, title: 'Detail contact' }
    });

    // return dialogRef.afterClosed();
  }

  async delete(id: number) {
    const r = await this.mydialog.openDialog('contact').toPromise();
    if (r === 'ok') {
      this.uow.contacts.delete(id).subscribe(() => this.update.next(true));
    }
  }

}

