<?php
// Set page title
$pageTitle = 'Cancel Booking';

// Include configuration and required functions
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/includes/booking-functions.php';

// Require login
requireLogin();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    setFlashMessage('error', 'Invalid request method.');
    redirect('pages/dashboard.php');
}

// Validate CSRF token
if (!validateCsrfToken($_POST['csrf_token'] ?? '')) {
    setFlashMessage('error', 'Invalid request. Please try again.');
    redirect('pages/dashboard.php');
}

// Get booking ID
$bookingId = isset($_POST['booking_id']) ? (int)$_POST['booking_id'] : 0;

// Cancel the booking
if (cancelBooking($bookingId, $_SESSION['user_id'])) {
    setFlashMessage('success', 'Booking cancelled successfully.');
} else {
    setFlashMessage('error', 'Failed to cancel booking. Please try again.');
}

// Redirect back to dashboard
redirect('pages/dashboard.php');