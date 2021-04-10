<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
<!-- navbar --> 
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a style="font-family:'Baskerville',serif" class="navbar-brand" href="index.php">THE GRIP BANK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar" style="color:white">
            <ul class="navbar-nav ml-auto" style="color:white">
                <li style="font-family:'Times New Roman', sans-serifserif" class="nav-item">
                    <a class="nav-link" style="color:white; font-family:Verdana" href="index.php">Home</a>
                </li>
                <li style="font-family:'Times New Roman', sans-serif" class="nav-item">
                    <a class="nav-link" style="color:white; font-family:Verdana" href="createuser.php">Create User</a>
                </li>
                <li style="font-family:'Times New Roman', sans-serif" class="nav-item">
                    <a class="nav-link" style="color:white; font-family:Verdana" href="transfermoney.php">Transfer Money</a>
                </li>
                <li style="font-family:'Times New Roman', sans-serif" class="nav-item">
                    <a class="nav-link" style="color:white; font-family:Verdana" href="transactionhistory.php">Transaction History</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
