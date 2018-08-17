// //F12 ctrl/shift/ + i enable/ disable Start
//     jQuery( document ).keydown( function (event) {
//         if ( event.keyCode == 123 ) {
//             return false;
//         } else if ( event.ctrlKey && event.shiftKey && event.keyCode == 73 ) {      
//             return false;
//         }
//     } );
// //F12 ctrl/shift/ + i enable/ disable End

// //Enable-Disable cut/copy/paste Start
// jQuery( document ).ready( function () {
//     jQuery( 'body' ).bind( 'cut copy paste', function ( e ) {
//         e.preventDefault();
//     });
// //Enable-Disable cut/copy/paste End

// //Enable-Disable mouse right click Start
//     jQuery( "body" ).on( "contextmenu", function( e ) {
//         return false;
//     } );
// } );
// //Enable-Disable mouse right click End

// //Enable-Disable ctrl u start
// document.onkeydown = function(e) {
//     if ( e.ctrlKey && ( e.keyCode === 67 ||  e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117 ) ) {
//         //alert('not allowed');
//         return false;
//     } else {
//         return true;
//     }
// };
// //Enable-Disable ctrl u End