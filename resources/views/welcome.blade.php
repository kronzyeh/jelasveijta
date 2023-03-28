<html>
    <head>
        <meta charset="UTF-8">
        <title>Jela svijeta</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>

    </head>
    <body bgcolor="white">
        <header>
            <nav>
                <ul>
                  <div class="left-nav">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">CATEGORIES</a></li>
                  </div>
                  <div class="center-nav">
                    <h1>jela svijeta</h1>
                  </div>
                  <div class="right-nav">
                    <li><a href="#">LANGUAGES</a></li>
                    <li><a href="#">SERVICES</a></li>
                  </div>
                </ul>
              </nav>
        </header>
        <div class="container">
            <div class="hero-image">
                <h1>FIND A RECIPE</h1>
                <div class="search-bar">
                    <form action="{{ route('meals.index') }}" method="get">
                        <input type="text" name="query" placeholder="Search...">
                        
                        <label class="perpage" for="per_page">Per Page:</label>
                        <select name="per_page" id="per_page">
                            <option value="">All</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                        </select>
                        
                        <label class="page" for="page">Page:</label>
                        <select name="page" id="page">
                            <option value="">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        
                        <label class="category" for="category">Category:</label>
                        <select name="category" id="category">
                            <option value="">All</option>
                            @foreach (\App\Models\Category::all() as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        
                        <label class="tags" for="tags">Tags:</label>
                        <select name="tags" id="tags">
                            <option value="">All</option>
                            <option value="vegetarian">Vegetarian</option>
                            <option value="gluten-free">Gluten-Free</option>
                            <option value="vegan">Vegan</option>
                        </select>
                        <label class="ingredients" for="ingredients">Ingredients:</label>
                        <select multiple name="ingredients[]" id="ingredients" style="width: 300px;">
                            @foreach (\App\Models\Ingredient::all() as $ingredient)
                                <option value="{{ $ingredient->name }}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>

                        <button type="submit">SEARCH RECIPE</button>
                    </form>
                </div>
                <div>
                    <a href="/meals"><button class="all_meals" type="submit">SHOW ALL MEALS</button></a>
                </div>      
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#ingredients').multiselect({
                    includeSelectAllOption: true,
                    selectAllText: 'Select All',
                    enableFiltering: true,
                    filterPlaceholder: 'Search',
                    maxHeight: 200
                });
            });
        </script>
    </body>
</html>
