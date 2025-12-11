<!-- file: resources/views/html101.blade.php -->
<!Doctype html>

<html>
    <head>
        <title>ส่วนหัวของ HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FORM</h1>
            <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="pbirth">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input type="datetime-local" class="form-control">
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
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input id="color" class="form-control">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="music">แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input id="music" class="form-control">
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
                    <input type="reset" value="Reset">
                    <b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b>
                    <input type="submit" value="Submit">
                    </div>
                </div>
                
            </form>
        </div>
    </body>
</html>