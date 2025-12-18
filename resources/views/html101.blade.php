<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
@extends('template.default')

@section('title', 'Workshop FORM')
@section('content')

<form>
    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML -FORM</h1>
            <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุชื่อ</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุชื่อ</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="pbirth">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input type="datetime-local" class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุชื่อ</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="gender">เพศ</label>
                    </div>
                    <div class="col">
                        <input type="radio">
                        <label for="boy">ชาย</lavel>
                     <input type="radio">
                    <label for="girl">หญิง</lavel><br>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="pics">รูป</label>
                    </div>
                    <div class="col">
                        <input type="file">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="address">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <input id="address" class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุชื่อ</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input id="color" class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุชื่อ</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="music">แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input id="music" class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุชื่อ</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <input type="checkbox">
                     <label for="confirm">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                    <b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b>
                    <input type="button" class="btn btn-primary"onclick="validateForm()" value="Submit">
                    </div>
                </div>

            </form>
        </div>
    </body>
</form>
@endsection

@push('scripts')
    <script>
        // let clickMe = function (){
        //    // let fname = document.getElementById('fname')
        //     //fname.value = "from ClickMe"
        //     console.log(fname.value);
        //     if(fname.value == ""){
        //         fname.classList.remove('is-valid')
        //         fname.classList.add('is-invalid')
        //     }else{
        //         fname.classList.remove('is-invalid')
        //         fname.classList.add('is-valid')
        //     }

        // }

        function validateForm() {
            let inputs = document.querySelectorAll('.form-control');

            inputs.forEach(input => {
                if(input.value.trim() === ""){
                    input.classList.remove('is-valid');
                    input.classList.add('is-invalid')
                }else{
                    input.classList.remove('is-invalid');
                    input.classList.add('is-valid')
                }

            });
        }






        let myfunc = (callback)=>{
            callback("in Callback")
        }

        callMe = (param) =>{
            console.log(param);

        }

        myfunc(callMe)
        let myvar1 = 1
        let myvar2 = "1"
        myvar2 = parseInt(myvar2)

        console.log(myvar2 + myvar1)
        console.log(1 == '1');

    </script>
@endpush


