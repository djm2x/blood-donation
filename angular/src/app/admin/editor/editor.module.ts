import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { EditorComponent } from './editor.component';
import { FroalaEditorModule, FroalaViewModule } from 'angular-froala-wysiwyg';


@NgModule({
  declarations: [EditorComponent],
  imports: [
    CommonModule,
    FroalaEditorModule,
    FroalaViewModule,
  ]
})
export class EditorModule { }
