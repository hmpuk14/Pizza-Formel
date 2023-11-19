/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/admin.js":
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
/***/ (() => {

eval("// Dropdown Auswahlmenü Admin\nfunction initDropdownSelection() {\n  document.querySelectorAll('.option').forEach(function (element) {\n    element.addEventListener('click', function () {\n      var value = parseInt(element.getAttribute('data-value'));\n      var userId = element.getAttribute('data-user-id');\n      selectOption(value, userId);\n    });\n  });\n}\nfunction selectOption(value, userId) {\n  document.getElementById('is_admin_' + userId).value = value;\n  document.getElementById('selected_option_' + userId).innerText = value === 1 ? 'Ja' : 'Nein';\n}\ndocument.addEventListener('DOMContentLoaded', initDropdownSelection);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJpbml0RHJvcGRvd25TZWxlY3Rpb24iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJmb3JFYWNoIiwiZWxlbWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJ2YWx1ZSIsInBhcnNlSW50IiwiZ2V0QXR0cmlidXRlIiwidXNlcklkIiwic2VsZWN0T3B0aW9uIiwiZ2V0RWxlbWVudEJ5SWQiLCJpbm5lclRleHQiXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2FkbWluLmpzPzkyNmQiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gRHJvcGRvd24gQXVzd2FobG1lbsO8IEFkbWluXG5mdW5jdGlvbiBpbml0RHJvcGRvd25TZWxlY3Rpb24oKSB7XG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLm9wdGlvbicpLmZvckVhY2goZnVuY3Rpb24gKGVsZW1lbnQpIHtcbiAgICAgICAgZWxlbWVudC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGNvbnN0IHZhbHVlID0gcGFyc2VJbnQoZWxlbWVudC5nZXRBdHRyaWJ1dGUoJ2RhdGEtdmFsdWUnKSk7XG4gICAgICAgICAgICBjb25zdCB1c2VySWQgPSBlbGVtZW50LmdldEF0dHJpYnV0ZSgnZGF0YS11c2VyLWlkJyk7XG4gICAgICAgICAgICBzZWxlY3RPcHRpb24odmFsdWUsIHVzZXJJZCk7XG4gICAgICAgIH0pO1xuICAgIH0pO1xufVxuXG5mdW5jdGlvbiBzZWxlY3RPcHRpb24odmFsdWUsIHVzZXJJZCkge1xuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdpc19hZG1pbl8nICsgdXNlcklkKS52YWx1ZSA9IHZhbHVlO1xuICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzZWxlY3RlZF9vcHRpb25fJyArIHVzZXJJZCkuaW5uZXJUZXh0ID0gdmFsdWUgPT09IDEgPyAnSmEnIDogJ05laW4nO1xufVxuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgaW5pdERyb3Bkb3duU2VsZWN0aW9uKTtcblxuXG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0EsU0FBU0EscUJBQXFCQSxDQUFBLEVBQUc7RUFDN0JDLFFBQVEsQ0FBQ0MsZ0JBQWdCLENBQUMsU0FBUyxDQUFDLENBQUNDLE9BQU8sQ0FBQyxVQUFVQyxPQUFPLEVBQUU7SUFDNURBLE9BQU8sQ0FBQ0MsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQVk7TUFDMUMsSUFBTUMsS0FBSyxHQUFHQyxRQUFRLENBQUNILE9BQU8sQ0FBQ0ksWUFBWSxDQUFDLFlBQVksQ0FBQyxDQUFDO01BQzFELElBQU1DLE1BQU0sR0FBR0wsT0FBTyxDQUFDSSxZQUFZLENBQUMsY0FBYyxDQUFDO01BQ25ERSxZQUFZLENBQUNKLEtBQUssRUFBRUcsTUFBTSxDQUFDO0lBQy9CLENBQUMsQ0FBQztFQUNOLENBQUMsQ0FBQztBQUNOO0FBRUEsU0FBU0MsWUFBWUEsQ0FBQ0osS0FBSyxFQUFFRyxNQUFNLEVBQUU7RUFDakNSLFFBQVEsQ0FBQ1UsY0FBYyxDQUFDLFdBQVcsR0FBR0YsTUFBTSxDQUFDLENBQUNILEtBQUssR0FBR0EsS0FBSztFQUMzREwsUUFBUSxDQUFDVSxjQUFjLENBQUMsa0JBQWtCLEdBQUdGLE1BQU0sQ0FBQyxDQUFDRyxTQUFTLEdBQUdOLEtBQUssS0FBSyxDQUFDLEdBQUcsSUFBSSxHQUFHLE1BQU07QUFDaEc7QUFFQUwsUUFBUSxDQUFDSSxnQkFBZ0IsQ0FBQyxrQkFBa0IsRUFBRUwscUJBQXFCLENBQUMiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYWRtaW4uanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/admin.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/admin.js"]();
/******/ 	
/******/ })()
;