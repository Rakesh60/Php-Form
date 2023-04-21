<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>


    <div class="container mt-3">
        <h2>Contact us for your concern</h2>
        <form action="getdata.php" method="post">

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">

            </div>
            <div class="form-group">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="number" name="mobile" class="form-control" id="name" aria-describedby="nameHelp">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">

            </div>


            <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" name="address" id="desc" cols="20" rows="5"></textarea>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
            <br>


            <div class="form-group">
                <label for="quali" class="form-label">Qualifiction</label>
                <select name="quali" class=" form-group form-select-sm" aria-label="Default select example">
                    <option diabled="disabled">Open this dropdown to select Qualifiction </option>
                    <option value="10th">10th</option>
                    <option value="10+2">10+2/Intermediate</option>
                    <option value="UG">Under graduate </option>
                    <option value="PG">Post Graduate</option>
                    <option value="MPhil">MPhil</option>
                    <option value="Phd">Phd</option>

                </select>
            </div>

            <div class="form-group">
                <label for="quali" class="form-label">State</label>
                <select name="state" class=" form-group form-select-sm" aria-label="Default select example">
                    <option selected>Open this dropdown to select Qualifiction </option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" name="dob" id="">
            </div>
            
            <br>


            <br>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

</body>

</html>