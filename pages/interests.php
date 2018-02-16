<!DOCTYPE html>
<html>
<head>
    <title>Interests</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/interests-styles.css">
</head>
<body>
<div class="container">
    <h1>Interests</h1><hr>
    <form action="./profile-summary" method="post">
        <div class="form-check form-check-inline">
            <fieldset id="indoor">
                <legend>Indoor Interests</legend>
                <div class="col">
                    <label><input type="checkbox" name = "indoor[]" value="tv"> TV</label>
                    <label><input type="checkbox" name = "indoor[]" value="puzzles"> Puzzles</label>

                    <label><input type="checkbox" name = "indoor[]" value="movies"> Movies</label>
                    <label><input type="checkbox" name = "indoor[]" value="reading"> Reading</label> <br>

                    <label><input type="checkbox" name = "indoor[]" value="cooking"> Cooking</label>
                    <label><input type="checkbox" name = "indoor[]" value="cards"> Playing Cards</label>

                    <label><input type="checkbox" name = "indoor[]" value="boardGames"> Board Games</label>
                    <label><input type="checkbox" name = "indoor[]" value="videoGames"> Video Games</label>
                </div>
            </fieldset>
        </div>

            <br>

        <div class="form-check form-check-inline">
            <fieldset id="outdoor">
                <legend>Outdoor Interests</legend>
                <div class="col">
                    <label><input type="checkbox" name = "outdoor[]" value="hiking"> Hiking</label>
                    <label><input type="checkbox" name = "outdoor[]" value="walking"> Walking</label>

                    <label><input type="checkbox" name = "outdoor[]" value="biking"> Biking</label>
                    <label><input type="checkbox" name = "outdoor[]" value="climbing"> Climbing</label><br>

                    <label><input type="checkbox" name = "outdoor[]" value="swimming"> Swimming</label>

                    <label><input type="checkbox" name = "outdoor[]" value="collecting"> Collecting</label>
                </div>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary">Next ></button>
    </form>

</div>
</body>
</html>
