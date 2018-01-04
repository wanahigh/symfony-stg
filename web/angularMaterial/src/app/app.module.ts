import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';


import { AppComponent } from './app.component';
import { MainCtrlComponent } from './main-ctrl/main-ctrl.component';


@NgModule({
  declarations: [
    AppComponent,
    MainCtrlComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
