<!DOCTYPE html>
<html>
<head>
    <title>Interests</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Interests</h1><hr>
    <form>
        <div class="form-check form-check-inline">
            <fieldset id="indoor">
                <legend>Indoor Interests</legend>
                <div class="col">
                    <label><input type="checkbox" name = "indoor[]" value="tv"> TV</label>
                    <label><input type="checkbox" name = "indoor[]" value="puzzles"> Puzzles</label>
                </div>
                <div class="col">
                    <label><input type="checkbox" name = "indoor[]" value="movies"> Movies</label>
                    <label><input type="checkbox" name = "indoor[]" value="reading"> Reading</label>
                </div>
                <div class="col">
                    <label><input type="checkbox" name = "indoor[]" value="cooking"> Cooking</label>
                    <label><input type="checkbox" name = "indoor[]" value="cards"> Playing Cards</label>
                </div>
                <div class="col">
                    <label><input type="checkbox" name = "indoor[]" value="boardGames"> Board Games</label>
                    <label><input type="checkbox" name = "indoor[]" value="videoGames"> Video Games</label>
                </div>
            </fieldset>

            <fieldset id="outdoor">
                <legend>Outdoor Interests</legend>
                <div class="col">
                    <label><input type="checkbox" name = "outdoor[]" value="hiking"> Hiking</label>
                    <label><input type="checkbox" name = "outdoor[]" value="walking"> Walking</label>
                </div>
                <div class="col">
                    <label><input type="checkbox" name = "outdoor[]" value="biking"> Biking</label>
                    <label><input type="checkbox" name = "outdoor[]" value="climbing"> Climbing</label>
                </div>
                <div class="col">
                    <label><input type="checkbox" name = "outdoor[]" value="swimming"> Swimming</label>
                </div>
                <div class="col">
                    <label><input type="checkbox" name = "outdoor[]" value="collecting"> Collecting</label>
                </div>
            </fieldset>
        </div>

            <a href="profile-info.php"><button type="submit" class="btn btn-primary">Next ></button></a>
    </form>
</div>
</body>
</html>
