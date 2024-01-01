{{-- <div class="bg-white p7 rounded w-9/12 mx-auto">
    <div x-data="dataFileDnD()" class="relative flex flex-col p-4 text-zinc-400 border border-zinc-200 rounded">
        <div x-ref="dnd"
            class="relative flex flex-col text-zinc-400 border border-zinc-200 border-dashed rounded cursor-pointer">
            <input accept="*" type="file" multiple
                class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                @change="addFiles($event)"
                @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                title="" />
    
            <div class="flex flex-col items-center justify-center py-10 text-center">
                <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="m-0">Arrastra aquí tu archivo o haz click en este área.</p>
            </div>
        </div>
    
        <template x-if="files.length > 0">
            <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
                @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                <template x-for="(_, index) in Array.from({ length: files.length })">
                    <div class="relative flex flex-col items-center overflow-hidden text-center bg-zinc-100 border rounded cursor-move select-none"
                        style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                        :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                        <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                            <svg class="w-4 h-4 text-zinc-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                        <template x-if="files[index].type.includes('audio/')">
                            <svg class="absolute w-12 h-12 text-zinc-400 transform top-1/2 -translate-y-2/3"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                            </svg>
                        </template>
                        <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                            <svg class="absolute w-12 h-12 text-zinc-400 transform top-1/2 -translate-y-2/3"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </template>
                        <template x-if="files[index].type.includes('image/')">
                            <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                x-bind:src="loadFile(files[index])" />
                        </template>
                        <template x-if="files[index].type.includes('video/')">
                            <video
                                class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                            </video>
                        </template>
    
                        <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                            <span class="w-full font-bold text-zinc-900 truncate"
                                x-text="files[index].name">Loading</span>
                            <span class="text-xs text-zinc-900" x-text="humanFileSize(files[index].size)">...</span>
                        </div>
    
                        <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                            @dragleave="fileDropping = null"
                            :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                        </div>
                    </div>
                </template>
            </div>
        </template>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/create-file-list"></script>
<script>
function dataFileDnD() {
    return {
        files: [],
        fileDragging: null,
        fileDropping: null,
        humanFileSize(size) {
            const i = Math.floor(Math.log(size) / Math.log(1024));
            return (
                (size / Math.pow(1024, i)).toFixed(2) * 1 +
                " " +
                ["B", "kB", "MB", "GB", "TB"][i]
            );
        },
        remove(index) {
            let files = [...this.files];
            files.splice(index, 1);

            this.files = createFileList(files);
        },
        drop(e) {
            let removed, add;
            let files = [...this.files];

            removed = files.splice(this.fileDragging, 1);
            files.splice(this.fileDropping, 0, ...removed);

            this.files = createFileList(files);

            this.fileDropping = null;
            this.fileDragging = null;
        },
        dragenter(e) {
            let targetElem = e.target.closest("[draggable]");

            this.fileDropping = targetElem.getAttribute("data-index");
        },
        dragstart(e) {
            this.fileDragging = e.target
                .closest("[draggable]")
                .getAttribute("data-index");
            e.dataTransfer.effectAllowed = "move";
        },
        loadFile(file) {
            const preview = document.querySelectorAll(".preview");
            const blobUrl = URL.createObjectURL(file);

            preview.forEach(elem => {
                elem.onload = () => {
                    URL.revokeObjectURL(elem.src); // free memory
                };
            });

            return blobUrl;
        },
        addFiles(e) {
            const files = createFileList([...this.files], [...e.target.files]);
            this.files = files;
            this.form.formData.files = [...files];
        }
    };
}
</script> --}}
{{-- 
<!-- component -->
<div class="bg-zinc-500 sm:px-8 md:px-16 sm:py-8">
    <main class="container mx-auto max-w-screen-lg h-full">
      <!-- file upload modal -->
      <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
        <!-- overlay -->
        <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
          <i>
            <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
            </svg>
          </i>
          <p class="text-lg text-blue-700">Drop files to upload</p>
        </div>

        <!-- scroll area -->
        <section class="h-full overflow-auto p-8 w-full flex flex-col">
          <header class="border-dashed border-2 border-zinc-400 py-12 flex flex-col justify-center items-center">
            <p class="mb-3 font-semibold text-zinc-900 flex flex-wrap justify-center">
              <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
            </p>
            <input id="hidden-input" type="file" multiple class="hidden" />
            <button id="button" class="mt-2 rounded-sm px-3 py-1 bg-zinc-200 hover:bg-zinc-300 focus:shadow-outline focus:outline-none">
              Upload a file
            </button>
          </header>

          <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-zinc-900">
            To Upload
          </h1>

          <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
            <li id="empty" class="h-full w-full text-center flex flex-col justify-center items-center">
              <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
              <span class="text-small text-zinc-500">No files selected</span>
            </li>
          </ul>
        </section>

        <!-- sticky footer -->
        <footer class="flex justify-end px-8 pb-8 pt-4">
          <button id="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
            Upload now
          </button>
          <button id="cancel" class="ml-3 rounded-sm px-3 py-1 hover:bg-zinc-300 focus:shadow-outline focus:outline-none">
            Cancel
          </button>
        </footer>
      </article>
    </main>
  </div>

  <!-- using two similar templates for simplicity in js code -->
  <template id="file-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
      <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-zinc-100 cursor-pointer relative shadow-sm">
        <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
          <h1 class="flex-1 group-hover:text-blue-800"></h1>
          <div class="flex">
            <span class="p-1 text-blue-800">
              <i>
                <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                </svg>
              </i>
            </span>
            <p class="p-1 size text-xs text-zinc-700"></p>
            <button class="delete ml-auto focus:outline-none hover:bg-zinc-300 p-1 rounded-md text-zinc-800">
              <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
              </svg>
            </button>
          </div>
        </section>
      </article>
    </li>
  </template>

  <template id="image-template">
    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
      <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-zinc-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
        <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
          <h1 class="flex-1"></h1>
          <div class="flex">
            <span class="p-1">
              <i>
                <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                </svg>
              </i>
            </span>

            <p class="p-1 size text-xs"></p>
            <button class="delete ml-auto focus:outline-none hover:bg-zinc-300 p-1 rounded-md">
              <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
              </svg>
            </button>
          </div>
        </section>
      </article>
    </li>
  </template>

<script>
const fileTempl = document.getElementById("file-template"),
imageTempl = document.getElementById("image-template"),
empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
const isImage = file.type.match("image.*"),
  objectURL = URL.createObjectURL(file);

const clone = isImage
  ? imageTempl.content.cloneNode(true)
  : fileTempl.content.cloneNode(true);

clone.querySelector("h1").textContent = file.name;
clone.querySelector("li").id = objectURL;
clone.querySelector(".delete").dataset.target = objectURL;
clone.querySelector(".size").textContent =
  file.size > 1024
    ? file.size > 1048576
      ? Math.round(file.size / 1048576) + "mb"
      : Math.round(file.size / 1024) + "kb"
    : file.size + "b";

isImage &&
  Object.assign(clone.querySelector("img"), {
    src: objectURL,
    alt: file.name
  });

empty.classList.add("hidden");
target.prepend(clone);

FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
for (const file of e.target.files) {
  addFile(gallery, file);
}
};

// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
ev.preventDefault();
for (const file of ev.dataTransfer.files) {
  addFile(gallery, file);
  overlay.classList.remove("draggedover");
  counter = 0;
}
}

// only react to actual files being dragged
function dragEnterHandler(e) {
e.preventDefault();
if (!hasFiles(e)) {
  return;
}
++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
if (hasFiles(e)) {
  e.preventDefault();
}
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
if (target.classList.contains("delete")) {
  const ou = target.dataset.target;
  document.getElementById(ou).remove(ou);
  gallery.children.length === 1 && empty.classList.remove("hidden");
  delete FILES[ou];
}
};

// print all selected files
document.getElementById("submit").onclick = () => {
alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
console.log(FILES);
};

// clear entire selection
document.getElementById("cancel").onclick = () => {
while (gallery.children.length > 0) {
  gallery.lastChild.remove();
}
FILES = {};
empty.classList.remove("hidden");
gallery.append(empty);
};

</script>

<style>
.hasImage:hover section {
background-color: rgba(5, 5, 5, 0.4);
}
.hasImage:hover button:hover {
background: rgba(5, 5, 5, 0.45);
}

#overlay p,
i {
opacity: 0;
}

#overlay.draggedover {
background-color: rgba(255, 255, 255, 0.7);
}
#overlay.draggedover p,
#overlay.draggedover i {
opacity: 1;
}

.group:hover .group-hover\:text-blue-800 {
color: #2b6cb0;
}
</style> --}}

<!-- svg for Upload icon -->


<section class="section-container py-10 min-h-1/2">
  <div class="flex flex-col items-center">
    <div class="mt-6 py-3 bg-white rounded-lg w-full">
      <h3 class="text-slate-800 text-lg text-center">
        Subir Documento
      </h3>
      <hr class="mt-5" />

      <!-- Documents uploads form and instructions -->
      <section class="mt-5 px-3 flex gap-6">
        <div class="flex-1 flex flex-col items-center p-3 border-2 border-dotted border-zinc-300 rounded-lg drag-area">
        <i class="fa-sharp fa-solid fa-cloud-arrow-up text-6xl text-violet-400"></i>
          <header class="mt-6">
            <span class="drag-file">Drag files here to upload </span> or
            <button class="px-2 py-1 text-white bg-violet-400 rounded-full file-input-button">
              select a file
            </button>
            from your device
          </header>
          <p class="mt-12 text-zinc-400 text-sm">
            JPG, PNG or PDF only, maximum file size-5MB
          </p>
          <input type="file" class="file-input" hidden />
        </div>
      </section>

      <!-- Images groups - All the selected images will be shown here -->
      <p class="text-red-700 text-sm hidden" id="filesize-error">
        The file size should be less than 5mb
      </p>
      <p class="text-red-700 text-sm hidden" id="filetype-error">
        The file should be an image or pdf only
      </p>

      <!-- No document selected -->
      <p class="hidden text-xl text-red-600 text-center bg-pink-200 mt-6 p-3 rounded-lg" id="input-empty-error"></p>
      <!-- Showing all the files inside this list -->
      <ul id="document-images" class="mt-6 px-3 bg-slate-100"></ul>
    </div>
    <div class="w-3/4 md:w-1/2 flex justify-between mt-8">
      <button class="px-6 md:px-14 py-3 rounded-sm bg-zinc-600 text-white document-prev-button" disabled>
        BACK
      </button>
      <button class="px-6 md:px-14 py-3 rounded-sm bg-violet-600 text-white document-next-button">
        Next
      </button>
    </div>
  </div>
</section>
<section class="text-center hidden">
  <p>Files uploaded successfully</p>
</section>


<script>

//selecting all required elements
const dropArea = document.querySelector(".drag-area"),
  dragFile = dropArea.querySelector(".drag-file"),
  button = dropArea.querySelector(".file-input-button"),
  input = dropArea.querySelector(".file-input");

let documentImages = document.querySelector("#document-images");

/*
 * When the user clicks the previous button, the current section is hidden and the previous section is
 * shown.
 * @param sectionContainer - the section that is currently being displayed
 */
const prevButtonNavigation = (sectionContainer) => {
  sectionContainer.classList.add("hidden");
  sectionContainer.previousElementSibling.classList.add("block");
  sectionContainer.previousElementSibling.classList.remove("hidden");
};

/*
 * When the next button is clicked, hide the current section and show the next section.
 * @param sectionContainer - the section that is currently being displayed
 */
const nextButtonNavigation = (sectionContainer) => {
  sectionContainer.classList.add("hidden");
  sectionContainer.nextElementSibling.classList.add("block");
  sectionContainer.nextElementSibling.classList.remove("hidden");
};

// Files array to check whether there is any file 
// selected or not
let documentFileObj = {
  fileName: []
};


// Input validation to check whether the fileName
// array in documentFileObj has any file or not and
// throw the error accordingly
const validationInputs = (container, dataObject) => {
  const errorMessage = container.querySelector("#input-empty-error");
  const emptyFields = [];
  for (const key in dataObject) {
    if (dataObject[key].length <= 0) {
      emptyFields.push(key.toUpperCase());
    }
  }
  errorMessage.textContent = `Please fill ${emptyFields.join()} fields!!`;
  errorMessage.classList.remove("hidden");
  setTimeout(() => {
    errorMessage.classList.add("hidden");
  }, 2000);
};



button.onclick = () => {
  input.click(); //if user click on the button then the input also gets clicked
};

input.addEventListener("change", function (e) {
  const target = e.target;
  setttingFileValue(target);
});

// Finding the document closest to the delete button and removing it from the list
documentImages.addEventListener("click", (e) => {
  const target = e.target;
  const deleteFileButton = target.closest(".delete-document");
  const documentsWrapper = target.closest("#document-images");
  const documentToDelete = target.closest(".document-file");
  const documentName = documentToDelete.firstElementChild.children[1].innerText;

  if (deleteFileButton === null) return;

  /* This is finding the index of the file name in the documentFileObj object. */
  const index = documentFileObj["fileName"].find((x) => x === documentName);
  /* This is removing the file name from the documentFileObj object. */
  documentFileObj["fileName"].splice(index, 1);
  documentsWrapper.removeChild(documentToDelete);
});

/**
 * If the file type is jpg, jpeg, or png, return the text-violet-600 fa-image class. Otherwise, return
 * the text-red-600 fa-file-pdf class.
 * @param fileType - The file type of the file.
 * @returns A function that takes a fileType as an argument and returns a string.
 */
const fileTypeLogo = (fileType) => {
  if (fileType === "jpg" || fileType === "jpeg" || fileType === "png") {
    return "text-violet-600 fa-image";
  } else {
    return "text-red-600 fa-file-pdf";
  }
};

// //If user Drag File Over DropArea
/* This is an event listener. It is listening for the dragover event. When the dragover event is
triggered, it will prevent the default behavior, add the active class to the dropArea element, and
change the text of the dragFile element. */
dropArea.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
  dropArea.classList.add("active");
  dragFile.textContent = "Release to Upload File";
});

// //If user leave dragged File from DropArea
/* This is an event listener. It is listening for the dragleave event. When the dragleave event is
triggered, it will remove the active class from the dropArea element and change the text of the
dragFile
element. */
dropArea.addEventListener("dragleave", () => {
  dropArea.classList.remove("active");
  dragFile.textContent = "Drag files here to upload";
});

//If user drop File on DropArea
/* This is an event listener. It is listening for the drop event. When the drop event is triggered, it
will prevent the default behavior, remove the active class from the dropArea element, change the
text of the dragFile element, and call the setttingFileValue function. */
dropArea.addEventListener("drop", (e) => {
  e.preventDefault();
  const target = e.dataTransfer;
  dropArea.classList.remove("active");
  dragFile.textContent = "Drag files here to upload";
  setttingFileValue(target);
});

// Navigation part
/* This is an event listener. It is listening for the click event. When the click event is triggered,
it will check if the target is the nextButton or prevButton. If it is the nextButton, it will check
if the documentFileObj object has a fileName property. If it does, it will call the
nextButtonNavigation function. If it does not, it will show an alert. If the target is the
prevButton, it will call the prevButtonNavigation function. */
document.querySelector("body").addEventListener("click", (e) => {
  const target = e.target;
  const prevButton = target.closest(".document-prev-button");
  const nextButton = target.closest(".document-next-button");
  const sectionContainer = target.closest(".section-container");

  if (nextButton) {
    if (documentFileObj["fileName"].length !== 0) {
      nextButtonNavigation(sectionContainer);
    } else {
      validationInputs(sectionContainer, documentFileObj);
    }
  }

  if (prevButton) {
    prevButtonNavigation(sectionContainer);
  }
});


const setttingFileValue = (target) => {
  /*getting user select file and [0] this means if user select multiple files then we'll select only the first one
     This is getting the file name, file size, and file type. */
  const fileName = target.files[0].name;
  const fileSize = target.files[0].size;
  const fileType = target.files[0].type.split("/").pop(); //fetching only the part after slash

  let filesizeErrorMessage = document.getElementById("filesize-error");
  let filetypeErrorMessage = document.getElementById("filetype-error");

  /* This is checking the file size. If the file size is greater than 5mb, it will show an error
    message. */
  let sizeInMB = Number.parseFloat(fileSize / (1024 * 1024)).toFixed(2);
  if (sizeInMB > 5) {
    filesizeErrorMessage.classList.remove("hidden");
    filetypeErrorMessage.classList.add("hidden");
  } else {
    filesizeErrorMessage.classList.add("hidden");
    /* This is checking the file type. If the file type is not pdf or image, it will show an error message. */
    const fileTypes = ["application/pdf","image/png","image/jpg","image/jpeg"]
    if (
      fileTypes.includes(target.files[0].type)
    ) {
      filetypeErrorMessage.classList.add("hidden");

      /* This is creating a new element and setting the file name, file size, and file type. */
      let newDocument = document.createElement("li");

      /* Setting the class attribute of the newDocument element. */
      newDocument.setAttribute(
        "class",
        "py-3 flex justify-between items-center md:items-end text-xs md:text-sm text-slate-700 border-b-2 border-slate-100 gap-1 document-file"
      );

      /* Setting the html markup of the new element and setting the file name, file size, and file type. */
      newDocument.innerHTML = `
            <p class="whitespace-nowrap overflow-hidden text-ellipsis w-40"><i class="fa-solid text-xl mr-5 ${fileTypeLogo(
              fileType
            )}"></i> 
            <span>${fileName}<span></p>
            <p>${fileType}</p>
            <p>${sizeInMB}mb</p>
            <p>Uploaded</p>
            <button class="delete-document"><i class="fa-solid fa-trash"></i></button>
            `;
      /* Adding the newDocument element to the documentImages element. */
      documentImages.append(newDocument);
      /* This is adding the file name to the documentFileObj object. */
      documentFileObj["fileName"].push(fileName);
    } else {
      filetypeErrorMessage.classList.remove("hidden");
    }
  }
};
</script>