{{-- <h1>Header</h1> --}}

{{-- <h1>Header</h1> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

.header {
  text-align: center; /* Horizontally centers the text within the .header div */
  display: flex; /* Use flexbox to align items */
  justify-content: center; /* Center horizontally */
  align-items: center; /* Center vertically */
  /* height: 100vh;  */
  /* Adjust height as needed or remove if not needed */
}

.header p {
  margin: 0; /* Remove default margins to avoid unwanted spacing */
  font-size: 250%; /* Optional: Adjust font size */
}
    </style>
</head>
<body>
    <div class="header">
      <p>Small-Shop-1</p>
        {{-- <a href="#default" class="logo">CompanyLogo</a> --}}
        {{-- <img src="{{ asset('storage/big_shop.png') }}" alt="Logo" style="width:100px; height:100px;">Small_Shop_1 --}}
        {{-- <div class="header-right">
          <a class="active" href="#home">Home</a>
          <a href="#contact">Contact</a>
          <a href="#about">About</a>
          <a href="#login">Login</a> --}}
        </div>
    </div>
</body>
</html>