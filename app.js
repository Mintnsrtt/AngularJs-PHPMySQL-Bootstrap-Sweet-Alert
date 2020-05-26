var app=angular.module("myApp",[]);
app.controller("usercontroller",function($scope,$http){
    $scope.insertData=function(){
        if($scope.fname==null){
            sweetAlert("FirstName Require","Error","error");
            return false;
        }
        if($scope.lname==null){
            sweetAlert("LastName Require","Error","error");
            return false;
        }else{
        $http.post("insert.php",
        {'fname':$scope.fname,'lname':$scope.lname})
        .then(function(data){
            sweetAlert("Data Complete","Insert Complete Form","success");
            $scope.fname=null;
            $scope.lname=null;
            $scope.displayData();
        });
    }
}

    $scope.displayData=function(){
        $http.get("select.php")
        .then(function(response){
          $scope.names = response.data .records;
        });
      }
});
