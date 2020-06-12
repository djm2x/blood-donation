import { Component, OnInit, ViewChild, EventEmitter, Inject } from '@angular/core';
import { MatPaginator, MatSort, MatDialog } from '@angular/material';
import { merge } from 'rxjs';
import { UpdateComponent } from './update/update.component';
import { UowService } from 'src/app/services/uow.service';
import { Actualite } from 'src/app/models/models';
import { DeleteService } from 'src/app/layouts/delete/delete.service';

@Component({
  selector: 'app-shared',
  templateUrl: './shared.component.html',
  styleUrls: ['./shared.component.scss']
})
export class SharedComponent implements OnInit {
  @ViewChild(MatPaginator, { static: true }) paginator: MatPaginator;
  @ViewChild(MatSort, { static: true }) sort: MatSort;
  update = new EventEmitter();
  isLoadingResults = true;
  resultsLength = 0;
  isRateLimitReached = false;

  dataSource = [];
  columnDefs = [
    // { columnDef: 'imageUrl', headName: 'image' },
    { columnDef: 'title', headName: '' },
    { columnDef: 'date', headName: '' },
    // { columnDef: 'region', headName: '' },
    // { columnDef: 'destination', headName: '' },
    { columnDef: 'option', headName: 'OPTION' },
  ].map(e => {
    e.headName = e.headName === '' ? e.columnDef.toUpperCase() : e.headName.toUpperCase();
    return e;
  });

  displayedColumns = this.columnDefs.map(e => e.columnDef);

  constructor(private uow: UowService, public dialog: MatDialog, private mydialog: DeleteService
    , @Inject('BASE_URL') private url: string ) { }

  ngOnInit() {
    this.getPage(0, 25, 'id', 'desc');
    merge(...[this.sort.sortChange, this.paginator.page, this.update]).subscribe(
      r => {
        r === true ? this.paginator.pageIndex = 0 : r = r;
        !this.paginator.pageSize ? this.paginator.pageSize = 25 : r = r;
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
    this.uow.actualites.getList(startIndex, pageSize, sortBy, sortDir).subscribe(
      (r: any) => {
        console.log(r.list);
        this.dataSource = r.list;
        this.resultsLength = r.count;
        this.isLoadingResults = false;
      }
    );
  }

  openDialog(o: Actualite, text) {
    const dialogRef = this.dialog.open(UpdateComponent, {
      width: '75vw',
      // height: '80vh',
      disableClose: true,
      data: { model: o, title: text }
    });

    return dialogRef.afterClosed();
  }

  add() {
    this.openDialog(new Actualite(), 'Ajouter actualité').subscribe(result => {
      if (result) {
        this.update.next(true);
      }
    });
  }

  edit(o: Actualite) {
    this.openDialog(o, `Modifier ${o.title}`).subscribe((result: Actualite) => {
      if (result) {
        this.update.next(true);
      }
    });
  }

  async delete(o: Actualite) {
    const r = await this.mydialog.openDialog('actualité').toPromise();
    if (r === 'ok') {
      this.uow.actualites.delete(o.id).subscribe(() => this.update.next(true));

      const d = await this.uow.files.deleteFiles([o.imageUrl.replace(';', '')], `actualites`).toPromise();
      console.log(d);
    }
  }

  displayImage(urlImage: string) {
    if (!urlImage) {
      return 'assets/404.jpg';
    }
    if (urlImage && urlImage.startsWith('http')) {
      return urlImage;
    }

    return `${this.url}/actualites/${urlImage.replace(';', '')}`;
  }

  imgError(img: any) {
    img.src = 'assets/404.jpg';
  }

}
