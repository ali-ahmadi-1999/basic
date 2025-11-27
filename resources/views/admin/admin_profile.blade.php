@extends('admin.admin_master')

@section('admin')
 

                <div class="content">

                    <!-- Start Content-->
                    <div class="container-xxl">

                        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-18 fw-semibold m-0">پروفایل</h4>
                            </div>
                        </div>




                         <div class="row" dir="ltr" lang="fa">
        <div class="col-12">
            <div class="card">

                <div class="card-body">

                    <div class="align-items-center">
                        <div class="d-flex align-items-center flex-row-reverse">
                            <img src="assets/images/users/user-11.jpg"
                                class="rounded-circle avatar-xxl img-thumbnail float-end" alt="تصویر پروفایل">

                            <div class="overflow-hidden me-4 text-end">
                                <h4 class="m-0 text-dark fs-20">آرین رضایی</h4>
                                <p class="my-1 text-muted fs-16">مهندس نرم‌افزار خلاق و علاقه‌مند به ساخت راهکارهای نوآورانه
                                </p>
                                <span class="fs-15">
                                    <i class="mdi mdi-message ms-2 align-middle"></i>
                                    زبان‌ها:
                                    <span>
                                        فارسی
                                        <span class="badge bg-primary-subtle text-primary px-2 py-1 fs-13 fw-normal">زبان
                                            مادری</span>
                                        ، انگلیسی، ترکی استانبولی
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="tab-pane pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                    <div class="row">

                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="card border mb-0">

                                    <div class="card-header text-end">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title mb-0">اطلاعات شخصی</h4>
                                            </div><!--end col-->
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">نام</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control text-end" type="text" value="Charles">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">نام خانوادگی</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control text-end" type="text" value="Buncle">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">شماره تماس</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i
                                                            class="mdi mdi-phone-outline"></i></span>
                                                    <input class="form-control text-end" type="text"
                                                        placeholder="شماره تماس" aria-describedby="basic-addon1"
                                                        value="+61 399615">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">ایمیل</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                                    <input type="text" class="form-control text-end"
                                                        value="CharlesBuncle@dayrep.com" placeholder="ایمیل"
                                                        aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">شرکت</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control text-end" type="text" value="zoyothemes">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">شهر</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control text-end" type="text" value="Adelaide">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">آدرس</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control text-end" type="text" value="Australia">
                                            </div>
                                        </div>

                                    </div><!--end card-body-->
                                </div>
                            </div>


                            <div class="col-lg-6 col-xl-6">
                                <div class="card border mb-0">

                                    <div class="card-header text-end">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title mb-0">تغییر رمز عبور</h4>
                                            </div><!--end col-->
                                        </div>
                                    </div>

                                    <div class="card-body mb-0">
                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">رمز عبور قدیمی</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control text-end" type="password"
                                                    placeholder="رمز عبور قدیمی">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">رمز عبور جدید</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control text-end" type="password"
                                                    placeholder="رمز عبور جدید">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row text-end">
                                            <label class="form-label">تأیید رمز عبور</label>
                                            <div class="col-lg-12 col-xl-12">
                                                <input class="form-control text-end" type="password"
                                                    placeholder="تأیید رمز عبور">
                                            </div>
                                        </div>

                                        <div class="form-group row text-end">
                                            <div class="col-lg-12 col-xl-12">
                                                <button type="submit" class="btn btn-primary">تغییر رمز عبور</button>
                                                <button type="button" class="btn btn-danger">لغو</button>
                                            </div>
                                        </div>

                                    </div><!--end card-body-->
                                </div>
                            </div>


                        </div>
                    </div>
                </div> <!-- پایان تنظیمات پروفایل -->


          
        </div>
    </div>
    </div>
    </div>




                    </div>

             </div>

   
@endsection
