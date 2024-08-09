<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <style>
      * {
        font-family: Arial, Helvetica, sans-serif;
      }
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      body::-webkit-scrollbar {
        overflow: hidden;
      }
      .primary-img {
        object-fit: cover;
        height: 100%;
      }
      .side-pic {
        margin-bottom: 4px;
      }
      .buy-now {
        background-color: orange;
        border: none;
        color: white;
        padding: 8px 16px;
        border-radius: 4px;
        /* box-shadow: 2px 1px 10px rgb(224, 138, 9); */
      }
      .add-to-cart {
        background-color: white;
        border: 1px solid orange;
        color: orange;
        border-radius: 4px;
        padding: 8px 16px;
      }

      .size-title {
        font-size: 12px;
        text-align: center;
        color: black;
        background-color: rgb(250, 216, 152);
        padding: 4px 4px;
        margin: 2px 4px;
        border: none;
      }

      .active {
        background-color: orange;
        color: white;
        border: none;
      }
      .picked {
        background-color: orange;
        color: white;
        border: none;
      }
      .small-side-pic {
        display: none;
      }
      .category {
        font-size: 16px;
        text-align: center;
        color: black;
        border-radius: 4px;
        padding: 4px 12px;
        margin: 2px 4px;
        border: none;
      }
      hr {
        border-color: orange;
        border-width: 2px;
      }
      .quantity {
        border: 1px solid orange;
        text-align: center;
        width: 50px;
      }

      @media only screen and (max-width: 759px) {
        .big-side-pic {
          display: none;
        }
        .small-side-pic {
          margin-top: 8px;
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
          margin: 4px 0;
        }
        .side-pic {
          width: 200px;
          object-fit: cover;
        }
        .quantity-container {
          display: flex;
        }
        .quantity {
          background-color: red;
        }
      }
    </style>
  </head>
  <body>
    <div class="container py-4">
      <div class="row">
        <div class="big-side-pic col-sm-2">
          <img class="side-pic img-fluid" src="tire.jpg" alt="" />
          <img class="side-pic img-fluid" src="tire.jpg" alt="" />
          <img class="side-pic img-fluid" src="tire.jpg" alt="" />
          <img class="side-pic img-fluid" src="tire.jpg" alt="" />
        </div>
        <div class="col-md-5">
          <img class="primary-img img-fluid" src="tire.jpg" alt="" />
        </div>
        <div class="small-side-pic col-md-2">
          <img class="side-pic img-fluid" src="tire.jpg" alt="" />
          <img class="side-pic img-fluid" src="tire.jpg" alt="" />
          <img class="side-pic img-fluid" src="tire.jpg" alt="" />
          <img class="side-pic img-fluid" src="tire.jpg" alt="" />
        </div>
        <div class="col-md-5 pt-2">
          <h2>Bridgestone Potenza</h2>
          <p>
            High-performance all-season tire for sports cars, performance for
            sedances, and coupes. It offers excellent wet and try traction,
            enhanced handling, and a confortable ride.
          </p>
          <span class="fa fa-star checked" style="color: yellow"></span>
          <span class="fa fa-star checked" style="color: yellow"></span>
          <span class="fa fa-star checked" style="color: yellow"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star mr-1s"
            ><span class="ml-1"> 120+ Reviews </span></span
          >
          <h5 class="pb-3" id="price">900</h5>
          <div class="quantity-container">
            <button class="subtract" id="subtract" onclick="subtract()">
              -
            </button>
            <input
              type="number"
              name="quantity"
              id="quantity"
              min="1"
              value="1"
              disabled
            />
            <button class="add" id="add" onclick="add()">+</button>
          </div>
          <p class="mb-1 p-0 ml-1">Sizes:</p>
          <div class="row pb-4 ml-0" id="sizes-container">
            <button class="size-title col-sm-3 active">204/55R16</button>
            <button class="size-title col-sm-3">225/45R17</button>
            <button class="size-title col-sm-3">245/40R18</button>
            <button class="size-title col-md-3">275/35R19</button>
          </div>
          <div class="row ml-1">
            <button class="buy-now col-sm-5 mr-3">Buy Now</button>
            <button class="add-to-cart col-sm-5">Add To Cart</button>
          </div>
        </div>
      </div>
      <p class="lead mt-4 mb-0 ml-2">Categories</p>
      <div class="row mt-0 ml-0" id="category-container">
        <button class="category col-mid-4 mx-2 picked">Category 1</button>
        <button class="category col-mid-4 mx-2">Category 2</button>
        <button class="category col-mid-4 mx-2">Category 3</button>
      </div>
      <p class="card-title mt-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
        atque. Doloribus est repellat, vel optio qui, saepe minima aut
        cupiditate alias, doloremque et quia quaerat dolor rem ab inventore
        officiis!
      </p>
      <p class="card-subtitle mt-2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
        atque. Doloribus est repellat, vel optio qui, saepe minima aut
        cupiditate alias, doloremque et quia quaerat dolor rem ab inventore
        officiis! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
        quos eos rem possimus excepturi reprehenderit asperiores voluptates
        provident nihil. Non consectetur quae, officia esse sunt dolorum sequi
        ratione accusantium placeat?
      </p>
    </div>
    <div class="container">
      <hr />
      <p class="lead">Related Products</p>
      <div class="row">
        <div class="col-md-3">
          <img class="img-fluid" src="tire.jpg" alt="" />
          <h5 class="mb-2 mt-2">Dunlop GRandtrek Touring A/S</h5>
          <p>₱ 8,250</p>
          <p class="text-secondary">
            An all-season tire designed for crossovers and SUVs, providing
            reliable traction, a comfortable ride, and long-tread life.
          </p>
        </div>
        <div class="col-md-3">
          <img class="img-fluid" src="tire.jpg" alt="" />
          <h5 class="mb-2 mt-2">Dunlop Grandtrek AT20</h5>
          <p>₱ 9,350</p>
          <p class="text-secondary">
            An all-terrain tire for SUVs and trucks, offering a balance between
            off-road capability and on-road comfort, with good traction in
            various conditions.
          </p>
        </div>
        <div class="col-md-3">
          <img class="img-fluid" src="tire.jpg" alt="" />
          <h5 class="mb-2 mt-2">Dunlop Direzza DZ102</h5>
          <p>₱ 7,700</p>
          <p class="text-secondary">
            High-performance summer tire for sports car and performance
            vehicles, delivering excellent grip, responsive handling, and
            enhanced cornering stability.
          </p>
        </div>
        <div class="col-md-3">
          <img class="img-fluid" src="tire.jpg" alt="" />
          <h5 class="mb-2 mt-2">Dunlop SP Sport Maxx RT</h5>
          <p>₱ 11,000</p>
          <p class="text-secondary">
            A premium high-performance summer tire for high-end sports car and
            performance sedans, providing exceptional grip, precise handling,
            and superior braking performance.
          </p>
        </div>
      </div>
    </div>
    <script>
      var btnContainer = document.getElementById("sizes-container");
      var btns = btnContainer.getElementsByClassName("size-title");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
      var btnContainer = document.getElementById("category-container");
      var btns = btnContainer.getElementsByClassName("category");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
          var current = document.getElementsByClassName("picked");
          current[0].className = current[0].className.replace(" picked", "");
          this.className += " picked";
        });
      }
      let price = document.getElementById("price");
      let input = document.getElementById("quantity");

      function add() {
        console.log(`inner ${input.value}`);
        var currentValue = parseInt(input.value, 10);
        var newValue = currentValue + 1;
        input.value = newValue;
        price.textContent = `${Number(price.innerHTML) * Number(newValue)}`;
      }
      function subtract() {
        if (Number(input.value) > 1) {
          console.log(`inner ${input.value}`);
          var currentValue = parseInt(input.value, 10);
          var newValue = currentValue - 1;
          input.value = newValue;
          price.textContent = Number(price.innerHTML) - 900;
        }
      }
    </script>
  </body>
</html>
