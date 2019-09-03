var isMenuCreated = false;

window.onload = function() {
	var tab = document.getElementById("menu_tab");
	var pic = document.createElement("p");
	pic.setAttribute("id", "menuPic");
	var img = document.createElement("img");
	img.setAttribute("src", "images/menu.png");
	img.setAttribute("id", "menuButton");
	pic.appendChild(img);
	tab.appendChild(pic);
	
	var button = document.getElementById("menuButton");
	button.onclick = onclickHandler;

	var backBtn = document.getElementById("back");
	var forwBtn = document.getElementById("forward");

	backBtn.onclick = backFunc;
	forwBtn.onclick = forwFunc;
}

function onclickHandler() {
	if (!isMenuCreated) {
		var body = document.getElementsByTagName("body")[0];
		var menu = document.createElement("div");
		menu.setAttribute("id", "mobMenu");

		var links = document.createElement("ul");
		menu.appendChild(links);

		var li1 = document.createElement("li");
		var a1 = document.createElement("a");
		a1.innerHTML = "НОВОСТИ";
		a1.setAttribute("href", "index.html");
		li1.appendChild(a1);

		var li2 = document.createElement("li");
		var a2 = document.createElement("a");
		a2.innerHTML = "СОБЫТИЯ";
		a2.setAttribute("href", "index.html");
		li2.appendChild(a2);

		var li3 = document.createElement("li");
		var a3 = document.createElement("a");
		a3.innerHTML = "ПОСТАВЩИКИ УСЛУГ";
		a3.setAttribute("href", "providers.html");
		li3.appendChild(a3);

		var li4 = document.createElement("li");
		var a4 = document.createElement("a");
		a4.innerHTML = "БЛАНКИ ДОКУМЕНТОВ";
		a4.setAttribute("href", "blanks.html");
		li4.appendChild(a4);

		var li5 = document.createElement("li");
		var a5 = document.createElement("a");
		a5.innerHTML = "ИСТОРИЯ ДОМА";
		a5.setAttribute("href", "history.html");
		li5.appendChild(a5);

		var li6 = document.createElement("li");
		var a6 = document.createElement("a");
		a6.innerHTML = "ФОТО";
		a6.setAttribute("href", "gallery.html");
		li6.appendChild(a6);

		var li7 = document.createElement("li");
		var a7 = document.createElement("a");
		a7.innerHTML = "КОНТАКТЫ";
		a7.setAttribute("href", "contacts.html");
		li7.appendChild(a7);

		links.appendChild(li1);
		links.appendChild(li2);
		links.appendChild(li3);
		links.appendChild(li4);
		links.appendChild(li5);
		links.appendChild(li6);
		links.appendChild(li7);

		body.appendChild(menu);
		isMenuCreated = true;
	} else {
		var menu = document.getElementById("mobMenu");
		menu.parentNode.removeChild(menu);

		isMenuCreated = false;
	}
}

var imgNum = 1;

function backFunc() {
	var img = document.getElementById("image");
	imgNum--;
	if (imgNum == 0) {
		imgNum = 9;
	}
	var src = "images/photos/" + imgNum + ".jpg";
	img.setAttribute("src", src);
}

function forwFunc() {
	var img = document.getElementById("image");
	imgNum++;
	if (imgNum == 10) {
		imgNum = 1;
	}
	var src = "images/photos/" + imgNum + ".jpg";
	img.setAttribute("src", src);
}