window.onload = () => {
  // here we grab our marquee element
  const marquee = document.querySelector('.marquee')
  if (marquee) {
    // here we create an empty array with 40 spaces
    const marquees = new Array(40).fill(null)
    // here we go over our array and do a loop
    marquees.forEach(el => {
      marquee.parentNode.append(marquee.cloneNode(true));
    })
  }
}
