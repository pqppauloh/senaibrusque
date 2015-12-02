/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


(function() {
   	var dialog = document.getElementById('window');
	document.getElementById('show').onclick = function() {
		dialog.show();
	};
	document.getElementById('exit').onclick = function() {
		dialog.close();
	};
})();