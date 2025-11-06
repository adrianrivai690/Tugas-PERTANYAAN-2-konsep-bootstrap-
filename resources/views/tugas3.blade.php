<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soal Nomor 3 - DOM Manipulation</title>
    <style>
        body{font-family: Arial, Helvetica, sans-serif; padding:20px}
        .gallery{display:flex; gap:12px; align-items:flex-start}
        .gallery img{width:160px; height:120px; object-fit:cover; cursor:pointer; border:2px solid #ccc; border-radius:4px}
        .controls{margin-top:12px}
        .controls button{margin-right:8px}
        .basket{margin-top:18px; border:2px solid #444; padding:12px; min-height:120px; border-radius:4px}
        .basket .items{display:flex; gap:8px; flex-wrap:wrap}
        .basket img{width:90px; height:70px; object-fit:cover; cursor:pointer; border:1px solid #999}
        #count{margin:0 0 8px 0}
    </style>
</head>
<body>
    <h2>Soal Nomor 3 — Manipulasi DOM</h2>

    <!-- Navigation: Previous / Next -->
    <div style="display:flex; justify-content:space-between; gap:10px; margin:12px 0;">
        <a href="/tugas" style="display:inline-block; padding:8px 12px; background:#6c757d; color:#fff; text-decoration:none; border-radius:4px;">&larr; Previous</a>
        <a href="/" style="display:inline-block; padding:8px 12px; background:#0d6efd; color:#fff; text-decoration:none; border-radius:4px;">Next &rarr;</a>
    </div>

    <div class="gallery" id="source">
        <!-- Three source images; clicking one adds it to the basket -->
        <img src="https://picsum.photos/id/1011/400/300" alt="bunga-1" data-name="Bunga 1">
        <img src="https://picsum.photos/id/1015/400/300" alt="bunga-2" data-name="Bunga 2">
        <img src="https://picsum.photos/id/1016/400/300" alt="bunga-3" data-name="Bunga 3">
    </div>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Klik gambar di atas untuk menambahkannya ke keranjang bunga.</p>

    <div class="controls">
        <button id="changeText">Change Text Color</button>
        <button id="changeBg">Change Background Color</button>
    </div>

    <div class="basket" id="basket" role="region" aria-label="Flower basket">
        <p id="count">The flower basket currently contains 0 flowers.</p>
        <div class="items" id="items"></div>
    </div>

    <script>
        // Elements
        const source = document.getElementById('source');
        const basket = document.getElementById('basket');
        const itemsContainer = document.getElementById('items');
        const countEl = document.getElementById('count');

        // State
        let count = 0;

        function updateCount(){
            countEl.textContent = `The flower basket currently contains ${count} ${count === 1 ? 'flower' : 'flowers'}.`;
        }

        // Add image to basket when a source image is clicked
        source.addEventListener('click', (ev) => {
            const img = ev.target;
            if(img && img.tagName === 'IMG'){
                const clone = img.cloneNode(true);
                // Make smaller in basket
                clone.width = 140;
                clone.height = 100;
                // When clicked in basket, remove it
                clone.addEventListener('click', (e) => {
                    e.stopPropagation();
                    removeFromBasket(e.currentTarget);
                });
                itemsContainer.appendChild(clone);
                count++;
                updateCount();
            }
        });

        function removeFromBasket(imgElement){
            if(imgElement && imgElement.parentNode === itemsContainer){
                itemsContainer.removeChild(imgElement);
                count = Math.max(0, count - 1);
                updateCount();
            }
        }

        // Buttons to change colors via prompt
        document.getElementById('changeText').addEventListener('click', () => {
            const color = prompt('Input your color for text', 'red');
            if(color !== null && color !== ''){
                countEl.style.color = color;
            }
        });

        document.getElementById('changeBg').addEventListener('click', () => {
            const color = prompt('Input your color for background', 'yellow');
            if(color !== null && color !== ''){
                basket.style.backgroundColor = color;
            }
        });

        // Small accessibility: announce when basket changes
        const ro = new MutationObserver(() => {
            basket.setAttribute('aria-live', 'polite');
        });
        ro.observe(itemsContainer, {childList: true});
    </script>
</body>
</html>
