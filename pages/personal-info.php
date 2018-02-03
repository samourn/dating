<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Personal Information</h1><hr>
        <div class="col"
        <form>
            <div class="form-group">
                <label for="fName">First Name</label>
                <input type="text" class="form-control" id="fName">
            </div>
            <div class="form-group">
                <label for="lName">Last Name</label>
                <input type="text" class="form-control" id="lName">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" class="form-control" id="age">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone">
            </div>
            <a href="profile-info.php"><button type="submit" class="btn btn-primary">Next ></button></a>
        </form>
    </div>
</body>
</html>
