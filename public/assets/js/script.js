import { stdio } from "./../vendor/spark/module/stdio.js";
import { Valid } from "./../vendor/spark/module/valid.js";

var std = new stdio();
std.test();

document.addEventListener('DOMContentLoaded', function(){
  console.log('dom content loades');
  var csrfToken, books, obj;
  csrfToken = document.querySelector("meta[name=csrf-token]").content;
  console.log(csrfToken);
  books = document.getElementById('books');
  if (books) {
   books.addEventListener("submit", logSubmit);
  }
});

function logSubmit(e) {
  obj = {
    method: 'POST',
    Headers: {
     "X-CSRF-Token": csrfToken,
     "Accept" : "application/json",
     "Content-Type": "application/json"
    }
  }

 console.log(e);
 e.preventDefault();
}