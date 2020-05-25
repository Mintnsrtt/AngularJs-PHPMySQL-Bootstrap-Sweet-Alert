var app=angular.module("myApp",[]);
app.controller("usercontroller",function($scope,$http){
    $scope.insertData=function(){
        $http.post("insert.php",
        {'fname':$scope.fname,'lname':$scope.lname})
        .then(function(data){
            sweetAlert("Data Complete","Insert Complete Form","success");
            $scope.fname=null;
            $scope.lname=null;
        });
    }
});
