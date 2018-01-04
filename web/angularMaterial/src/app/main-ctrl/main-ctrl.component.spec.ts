import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MainCtrlComponent } from './main-ctrl.component';

describe('MainCtrlComponent', () => {
  let component: MainCtrlComponent;
  let fixture: ComponentFixture<MainCtrlComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MainCtrlComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MainCtrlComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
