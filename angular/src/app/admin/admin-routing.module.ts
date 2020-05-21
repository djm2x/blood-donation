import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AdminComponent } from './admin.component';


const routes: Routes = [
  { path: '', redirectTo: '', pathMatch: 'full' },
  {
    path: '', component: AdminComponent,
    children: [
      { path: '', redirectTo: 'activite', pathMatch: 'full'},

      { path: 'president', loadChildren: () => import('./president/shared.module').then(m => m.SharedModule), },
      { path: 'planification', loadChildren: () => import('./planification/shared.module').then(m => m.SharedModule), },
      { path: 'activite', loadChildren: () => import('./activite/activite.module').then(m => m.ActiviteModule), },
      { path: 'blog', loadChildren: () => import('./blog/shared.module').then(m => m.SharedModule), },
      { path: 'galerie', loadChildren: () => import('./galerie/shared.module').then(m => m.SharedModule), },
      { path: 'contact', loadChildren: () => import('./contact/contact.module').then(m => m.MessageModule), },
      { path: 'news-letter', loadChildren: () => import('./news-letter/news-letter.module').then(m => m.NewsLetterModule), },
      { path: 'region', loadChildren: () => import('./region/region.module').then(m => m.RegionModule), },
      { path: 'user', loadChildren: () => import('./user/user.module').then(m => m.UserModule), },
      // { path: 'role', loadChildren: () => import('./role/role.module').then(m => m.RoleModule), },
      // { path: 'state-client', loadChildren: () => import('./state-client/state-client.module').then(m => m.StateClientModule), },
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdminRoutingModule { }
