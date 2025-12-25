<!-- file: resources/views/html101.blade.php -->
<!Doctype html>
@extends('template.default')

@section('title', 'Workshop FORM')
@section('content')

<div class="container mt-4">
    @if(!isset($data))
<form method="post" action="/history">
@csrf

            <h1>Workshop #HTML -FORM</h1>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" name ="fname" class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุชื่อ</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" name="lname"class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุสกุล</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="pbirth">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input type="datetime-local" name="pbirth"class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุ วัน/เดือน/ปี</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="gender">เพศ</label>
                    </div>
                    <div class="col">
                        <input type="radio" name="gender" value="ชาย" id="boy">
                        <label for="boy">ชาย</lavel>
                        <input type="radio" name="gender" value="หญิง" id="girl">
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
                        <input id="address" name="address" class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุที่อยู่</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input id="color" name="color" class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุสีที่ชอบ</div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="music">แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input id="music" name="music"class="form-control">
                        <div class ="valid-feedback">ถูกต้อง</div>
                        <div class="invalid-feedback">โปรดระบุเพลงที่ชอบ</div>
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
                    <input type="submit" class="btn btn-primary"onclick="validateForm()" value="Submit">
                    </div>
                </div>

</form>
@else
<h3>ข้อมูลที่ได้รับ:</h3>
<ul>
    <li>ชื่อ:{{ $data['fname'] ?? 'ไม่มีข้อมูล'}}</li>
    <li>นามสกุล:{{ $data['lname'] ?? 'ไม่มีข้อมูล'}}</li>
    <li>วัน/เดือน/ปีเกิด:{{ $data['pbirth'?? 'ไม่มีข้อมูล']}}</li>
    <li>เพศ:{{ $data['gender'] ?? 'ไม่มีข้อมูล'}}</li>
    <li>ที่อยู่:{{ $data['address'] ?? 'ไม่มีข้อมูล'}}</li>
    <li>สีที่ชอบ:{{ $data['color'] ?? 'ไม่มีข้อมูล'}}</li>
    <li>แนวเพลงที่ชอบ:{{ $data['music'] ?? 'ไม่มีข้อมูล'}}</li>
</ul>
@endif
</div>
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
