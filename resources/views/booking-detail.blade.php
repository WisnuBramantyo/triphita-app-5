<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .booking-form {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
        }

        h1 {
            text-align: center;
            margin: 50px 0 30px; /* Add space above Booking Details */
        }

        .room-details {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fdfdfd;
        }

        .room-details p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Details</h1>
        <div class="booking-form">
            <!-- Room Details Section -->
            <div class="room-details">
                <h5>Room Details</h5>
                <p><strong>Room Type:</strong> Superior Queen</p>
                <p><strong>Room Size:</strong> 6m<sup>2</sup></p>
                <p><strong>Price:</strong> IDR 446,281 / night</p>
                <p><strong>Facilities:</strong> Wi-Fi, Free Parking</p>
            </div>

            <form action="{{ route('submit-booking') }}" method="POST">
                @csrf
                {{-- <div class="mb-3">
                  <label for="fullName" class="form-label">Room Id</label>
                  <input type="text" class="form-control" id="rom_id" name="full_name" required>
              </div> --}}
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="numberOfRooms" class="form-label">Number of Rooms</label>
                    <input type="number" class="form-control" id="numberOfRooms" name="number_of_rooms" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="numberOfDays" class="form-label">Number of Days</label>
                    <input type="number" class="form-control" id="numberOfDays" name="number_of_days" min="1" required>
                </div>

                <div class="total-price">
                    Total Price: <span id="totalPrice">0</span>
                </div>

                <button type="submit" class="btn btn-primary">Checkout</button>
            </form>
        </div>
    </div>

    {{-- calculate total price --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const pricePerNight = 446281; // Price per night for one room
            const numberOfRoomsInput = document.getElementById('numberOfRooms');
            const numberOfDaysInput = document.getElementById('numberOfDays');
            const totalPriceDisplay = document.getElementById('totalPrice');

            function calculateTotalPrice() {
                const numberOfRooms = parseInt(numberOfRoomsInput.value) || 0;
                const numberOfDays = parseInt(numberOfDaysInput.value) || 0;
                const totalPrice = numberOfRooms * numberOfDays * pricePerNight;
                totalPriceDisplay.textContent = totalPrice > 0 ? totalPrice.toString() : '0';
                totalPriceInput.value = totalPrice > 0 ? totalPrice : 0;
            }

            numberOfRoomsInput.addEventListener('input', calculateTotalPrice);
            numberOfDaysInput.addEventListener('input', calculateTotalPrice);
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
