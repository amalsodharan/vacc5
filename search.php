<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="search2.css">
    <style>
        .bur{
            height: 40px;
            width: 130px;
            border-style: none;
            border-radius: 8px;
            background-color: rgb(0, 84, 211);
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="top">
                <div class="row">
                    <div class="col">
                        <h2>e-vaccines</h2>
                    </div>
                    <div class="col-5">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="login.php">LOGIN</a></li>
                            <li><a href="#">ABOUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header><br><br><br><br><br>
    <form action="searchdb.php">
    <div class="vacc">
        <h2 style="text-align: center;color: rgba(21, 98, 212, 0.89);font-size: 35px;">Search your slot</h2>
        <center>
        <div class="age">
            <hr>
            <div class="age-head">
                <h4>Age</h4>
            </div>
            <div class="age-body">
                <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                <label class="btn btn-outline-primary btn-sm" for="btn-check-outlined">12-17</label>
                <input type="checkbox" class="btn-check" id="btn-check-2-outlined" autocomplete="off">
                <label class="btn btn-outline-primary btn-sm" for="btn-check-2-outlined">18+</label>
                <input type="checkbox" class="btn-check" id="btn-check-3-outlined" autocomplete="off">
                <label class="btn btn-outline-primary btn-sm" for="btn-check-3-outlined">45+</label>
            </div>
        </div>
        <div class="age">
            <hr>
            <div class="age-head">
                <h4>Dose</h4>
            </div>
            <div class="age-body">
                <input type="checkbox" class="btn-check" id="btn-check-4-outlined" autocomplete="off">
                <label class="btn btn-outline-primary btn-sm" for="btn-check-4-outlined">Dose 1</label>
                <input type="checkbox" class="btn-check" id="btn-check-5-outlined" autocomplete="off">
                <label class="btn btn-outline-primary btn-sm" for="btn-check-5-outlined">Dose 2</label>
            </div>
        </div>
        <div class="age">
            <hr>
            <div class="age-head">
                <h4>Cost</h4>
            </div>
            <div class="age-body">
                <input type="checkbox" class="btn-check" id="btn-check-6-outlined" autocomplete="off">
                <label class="btn btn-outline-primary btn-sm" for="btn-check-6-outlined">Free</label>
            </div>
        </div>
        <div class="age">
            <hr>
            <div class="age-head">
                <h4>Vaccine</h4>
            </div>
            <div class="age-body">
                <input type="checkbox" class="btn-check" id="btn-check-7-outlined" autocomplete="off">
                <label class="btn btn-outline-primary btn-sm" for="btn-check-7-outlined">Covishield</label>
                <input type="checkbox" class="btn-check" id="btn-check-8-outlined" autocomplete="off">
                <label class="btn btn-outline-primary btn-sm" for="btn-check-8-outlined">Covaxin</label>
            </div>
        </div>
        </center><br><br> 
        <div class="overflow-auto" id="dat">
        <div class="datee">
            <ul>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-9-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-9-outlined">Mon,1 jan</label>
                </li>
                <li>
                <input type="checkbox" class="btn-check" id="btn-check-10-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-10-outlined">Tue,2 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-11-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-11-outlined">wed,3 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-12-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-12-outlined">thu,4 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-13-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-13-outlined">fri,5 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-14-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-14-outlined">sat,6 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-15-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-15-outlined">sun,7 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-16-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-16-outlined">Mon,8 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-17-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-17-outlined">tue,9 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-18-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-18-outlined">wed,10 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-19-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-19-outlined">thu,11 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-20-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-20-outlined">fri,12 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-21-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-21-outlined">sat,13 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-22-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-22-outlined">sun,14 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-23-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-23-outlined">Mon,15 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-24-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-24-outlined">tue,16 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-25-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-25-outlined">wed,17 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-26-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-26-outlined">thu,18 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-27-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-27-outlined">fri,19 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-28-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-28-outlined">sat,20 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-29-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-29-outlined">sun,21 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-30-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-30-outlined">Mon,22 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-31-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-31-outlined">tue,23 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-32-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-32-outlined">wed,24 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-33-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-33-outlined">thu,25 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-34-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-34-outlined">fri,26 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-35-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-35-outlined">sat,27 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-36-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-36-outlined">sun,28 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-37-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-37-outlined">Mon,29 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-38-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-38-outlined">tue,1 jan</label>
                </li>
                <li>
                    <input type="checkbox" class="btn-check" id="btn-check-39-outlined" autocomplete="off">
                    <label class="btn btn-outline-primary btn-sm" for="btn-check-39-outlined">wed,1 jan</label>
                </li>
                
            </ul>
        </div>
        </div><br><br>
        <div class="subm">
            <input type="submit" value="Check for Avialability" class="but"><br><br>
        </div>
    </form><br><br><br>
    <div class="row">
            <div class="col">
                <img src="img4.svg">
            </div>
            <div class="col">
                <h3 style="color: rgb(0, 84, 211);">Vaccination Date Correction</h3><br>
                <p style="color: rgb(0, 84, 211);">If the date printed on your vaccination certificate differs from the actual date of<br> vaccine administration, you may raise a request for correction of the same by<br> submitting a valid proof of correct vaccination date.</p>
                <input type="submit" value="Update Now" class="bur">
            </div>
    </div><br><br>
        <div class="last">
            <h5>For Grievances and Feedback :<br> evaccine@gmail.com<br><br>
            Ph no : 0481-246861<br><br>
            Privacy Policy | Terms of Service<br><br>
            Copyright © 2021 e-vaccine. All Rights Reserved
            </h5> 
        </div>
</body>
</html>
