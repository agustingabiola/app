/* 
 * DND punto 3
 */
function handleFileSelect(evt) {
    evt.stopPropagation();
    evt.preventDefault();

    var files = evt.dataTransfer.files; // FileList object.

    // files is a FileList of File objects. List some properties.
    var output = [];
    for (var i = 0, f; f = files[i]; i++) {
      output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                  f.size, ' bytes',
                  '</li>');
    }
    document.getElementById('objectsDropped').innerHTML = '<ul>' + output.join('') + '</ul>';
}

function handleDragOver(evt) {
    evt.stopPropagation();
    evt.preventDefault();
}

// Setup the dnd listeners.
var dropZone = document.getElementById('drop');
dropZone.addEventListener('dragover', handleDragOver, false);
dropZone.addEventListener('drop', handleFileSelect, false);


