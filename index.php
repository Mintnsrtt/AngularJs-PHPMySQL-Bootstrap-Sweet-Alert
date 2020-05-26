<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Angular JS - INSERT DATA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
      <div class="container" style="width: 500px;">
          <h3 align="center">Insert Data - AngularJS</h3>
          <div ng-app="myApp" ng-controller="usercontroller" ng-init="displayData()">
            <label>FristName:</label>
              <input type="text" name="fname" ng-model="fname" class="form-control">
            <label>LastName:</label>
              <input type="text" name="lname" ng-model="lname" class="form-control">
            <br><input type="hidden" ng-model="id"/>
             <input type="submit" name="btnInsert" ng-click="insertData()" class="btn btn-info" value="Insert">
          <br><br>

          <table class="table tabel-bordered">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Update</th>
            </tr>

            <tr ng-repeat="x in names">
                <td>{{x.id}}</td>
                <td>{{x.fname}}</td>
                <td>{{x.lname}}</td>
                <td><button class="btn btn-info btn-xs" ng-click="">Update</button></td>
            </tr>

          </table>
          </div>
      </div>
      
  </body>
  <script src="app.js"></script>
  <script src="dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</html>