var model = {
	filename: "file.txt",
	text: "Say hello to preLudium"
};
var line_number = [1];
var editorApp = angular.module("editorApp", []);

editorApp.controller("EditorCtrl", function ($scope) {

	$scope.editor = model;

	$scope.enterPressed = function ($event) {

		
		var keyCode = $event.which || $event.keyCode;
 		if (keyCode === 13) {

 			line_number.push(line_number.length + 1);
    		$scope.line = line_number;
 		}

 	}
});

