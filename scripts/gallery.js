window.onload = init;

function init() {
	var backBtn = document.getElementById("back");
	var forwBtn = document.getElementById("forward");

	backBtn.onclick = backFunc;
	forwBtn.onclick = forwFunc;
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