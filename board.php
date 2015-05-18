<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>wordplay</title>
<link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="board.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-7">
<table class="table table-bordered" id="game_board">
  <tr id="r0">
    <td class="tripw" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td class="tripw"></td>
  </tr>
  <tr id="r1">
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
  </tr>
  <tr id="r2">
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
  </tr>
  <tr id="r3">
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
  </tr>
  <tr id="r4">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr id="r5">
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
  </tr>
  <tr id="r6">
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
  </tr>

<!-- BEGIN MIDDLE ROW -->
  <tr id="r7">
    <td class="tripw"></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td id="star"><span class="glyphicon glyphicon-star"></span></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td class="tripw"></td>
  </tr>
<!-- END MIDDLE ROW -->

  <tr id="r8">
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
  </tr>
  <tr id="r9">
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
  </tr>
  <tr id="r10">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr id="r11">
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
  </tr>
  <tr id="r12">
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
  </tr>
  <tr id="r13">
    <td></td>
    <td class="dubw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubw"></td>
    <td></td>
  </tr>
  <tr id="r0">
    <td class="tripw"></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="tripw"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="dubl"></td>
    <td></td>
    <td></td>
    <td class="tripw"></td>
  </tr>
</table>
</div><!-- end col-md-8 game board table -->
<?php include 'scoreboard.php'; ?>
<?php include 'tilerack.php'; ?>
</div><!-- end row -->
</div><!-- end container -->
</body>
</html>
