var entries = document.getElementById("entries");

// when you click on entries wrapper div
entries.addEventListener("click", function(e){
  // look if the button you click on is the edit button
  if(e.target.name == "edit"){
    e.preventDefault();

    // find entry wrapper
    let entry = e.target.parentElement.parentElement;

    // get title and paragraph
    let title = entry.children[0].textContent.trim();
    let para = entry.children[1].textContent.trim();
    let id = e.target.parentElement.children[0].value;

    // open edit box
    document.getElementById("edit-entry").classList.add("open");

    // paste values into edit box
    document.getElementById("edit-title").value = title;
    document.getElementById("edit-para").innerHTML = para;
    document.getElementById("edit-id").value = id;
  }
});


document.getElementById("edit-entry-bg")
  .addEventListener("click", function(e){
    document.getElementById("edit-entry").classList.remove("open");
  });
