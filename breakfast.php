<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>BreakfastS</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card mb-3" style="height: 80%">
  <div class="row ">
    <div style="height: 250%;" class="col-md-4">
      <img src="images/bugers.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Buger</h5>
        <div id="ingredients1"></div>
      </div>
    </div>
  </div>
</div>
  <!-- Form for adding another recipe with image upload -->
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Add a New Recipe</h5>
        <form id="recipeForm" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="recipeTitle" class="form-label">Recipe Title</label>
                <input type="text" class="form-control" id="recipeTitle" required>
            </div>
            <div class="mb-3">
                <label for="recipeIngredients" class="form-label">Ingredients</label>
                <textarea class="form-control" id="recipeIngredients" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="recipeImage" class="form-label">Recipe Image</label>
                <input type="file" class="form-control" id="recipeImage" accept="image/*" required>
            </div>
            <button type="button" class="btn btn-primary" onclick="addRecipe()">Add Recipe</button>
        </form>
    </div>
</div>
        </div>
    </div>
     <!--footer-->
       <div class="container-fluid class"></div>
       <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6485a457cc26a871b021d58a/1hb6521vb';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
</body>

</html>
