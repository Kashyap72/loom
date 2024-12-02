<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bundle & Save</title>
</head>

<body>
    <header>
        
        <h1 class="h1-color">Bundle & Save</h1>
    </header>
    <main>
        <section class="box-container">
            <!-- Box 1 -->
            <div class="box" id="box1">
                <div class="box-content">
                    <div class="box-header">
                        <div class="left-align">
                            <input type="radio" name="selection">
                            <div class="box-left">
                                <h2>1 Pair</h2>
                                <h1>DKK 195.00</h1>
                            </div>
                        </div>
                        <div class="box-right">
                            <p>50% Off</p>
                        </div>
                    </div>
                    <div class="options hidden">
                        <div class="row">
                            <div class="column">
                                <label>Size:</label>
                                <select class="form-control">
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                </select>
                                <select class="form-control">
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                </select>
                            </div>
                            <div class="column">
                                <label>Color:</label>
                                <select class="form-control">
                                    <option value="">Red</option>
                                    <option value="">Yellow</option>
                                    <option value="">Green</option>
                                </select>
                                <select class="form-control">
                                    <option value="">Blue</option>
                                    <option value="">Black</option>
                                    <option value="">White</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="box" id="box2">
                <div class="box-content">
                    <div class="box-header">
                        <div class="left-align">
                            <input type="radio" name="selection">
                            <div class="box-left">
                                <h2>2 Pair</h2>
                                <h1>DKK 345.00</h1>
                            </div>
                        </div>
                        <div class="box-right">
                            <p class="p-green">Most Popular</p>
                            <p>40% Off</p>
                        </div>
                    </div>
                    <div class="options hidden">
                        <div class="row">
                            <div class="column">
                                <label>Size:</label>
                                <select class="form-control">
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                </select>
                                <select class="form-control">
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                </select>
                            </div>
                            <div class="column">
                                <label>Color:</label>
                                <select class="form-control">
                                    <option value="">Red</option>
                                    <option value="">Yellow</option>
                                    <option value="">Green</option>
                                </select>
                                <select class="form-control">
                                    <option value="">Blue</option>
                                    <option value="">Black</option>
                                    <option value="">White</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="box" id="box3">
                <div class="box-content">
                    <div class="box-header">
                        <div class="left-align">
                            <input type="radio" name="selection">
                            <div class="box-left">
                                <h2>3 Pair</h2>
                                <h1>DKK 528.00</h1>
                            </div>
                        </div>
                        <div class="box-right">
                            <p>60% Off</p>
                        </div>
                    </div>
                    <div class="options hidden">
                        <div class="row">
                            <div class="column">
                                <label>Size:</label>
                                <select class="form-control">
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                </select>
                                <select class="form-control">
                                    <option value="">S</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                </select>
                            </div>
                            <div class="column">
                                <label>Color:</label>
                                <select class="form-control">
                                    <option value="">Red</option>
                                    <option value="">Yellow</option>
                                    <option value="">Green</option>
                                </select>
                                <select class="form-control">
                                    <option value="">Blue</option>
                                    <option value="">Black</option>
                                    <option value="">White</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shipping Info and Total Section -->
            <div class="box-content">
                <div class="box-header">
                    <div class="left-align">
                        <div class="box-left green-text">
                            <h2>Free 2 Day Shipping</h2>
                        </div>
                    </div>
                    <div class="box-right-total">
                        <p><strong>Total:</strong> DKK 360.00</p>
                    </div>
                </div>
                <button class="green-button">Add to Cart</button>
            </div>

        </section>
    </main>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            margin: 10px 0;
        }

        h1 {
            font-size: 1.5rem;
            color: #444;
        }

        main {
            width: 100%;
            max-width: 600px;
            padding: 10px;
        }

        .box-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .box {
            background: #fafafa;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .box.expanded {
            background: #f5f5f5;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .box-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .left-align {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .box-left h2 {
            font-size: 10px;
            margin: 0;
            color: #555;
        }

        .box-left h1 {
            font-size: 15px;
            margin: 5px 0;
            color: #333;
        }

        .box-right-total p {
            font-size: 0.9rem;
        }

        .box-right p {
            font-size: 0.9rem;
            font-weight: bold;
        }

        .green-text h2 {
            color: #409a87;
        }

        .options {
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .hidden {
            display: none;
        }

        body,
        .row {
            margin: 0;
            padding: 0;
        }

        .row {
            display: flex;

            justify-content: space-between;
            width: 100%;
        }

        .column {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 48%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        .green-button {
            background-color: #005844;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        .green-button:hover {
            background-color: #003d2c;
        }

        .selected {
            border-color: #005844 !important;
            background-color: #f3faf8 !important;
        }

        input[type="radio"]:checked+div {
            border-color: #005844;
            background-color: #f3faf8;
        }

        .h1-color {
            color: #409a87;
        }

        .p-green {
            color: #409a87 !important;
        }
    </style>

    <script>
        document.querySelectorAll('.box').forEach(box => {
            box.addEventListener('click', function(event) {
                if (event.target.closest('.form-control') || event.target.tagName === 'SELECT') {
                    return;
                }
                const radioButton = this.querySelector('input[type="radio"]');
                if (radioButton) {
                    radioButton.checked = true;
                }
                const options = this.querySelector('.options');
                if (this.classList.contains('expanded')) {

                    this.classList.remove('expanded');
                    options.classList.add('hidden');
                } else {
                    document.querySelectorAll('.box.expanded').forEach(b => {
                        b.classList.remove('expanded');
                        b.querySelector('.options').classList.add('hidden');
                    });
                    this.classList.add('expanded');
                    options.classList.remove('hidden');
                }
                document.querySelectorAll('.box').forEach(b => {
                    b.classList.remove('selected');
                });
                this.classList.add('selected');
            });
        });
    </script>
</body>

</html>