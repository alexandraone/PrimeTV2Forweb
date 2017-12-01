function downloadImage() {
    var dt = canvas.toDataURL('Output/tmp.pdf');
    this.href = dt;
};
downloadLnk.download('tmp.pdf');