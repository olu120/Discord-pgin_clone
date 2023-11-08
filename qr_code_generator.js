// Function to generate QR code
function generateQRCode(data, containerId) {
    const container = document.getElementById(containerId);
  
    // Create a new QRCode instance
    const qrCode = new QRCode(container, {
      text: data,
      width: 160,
      height: 160,
    });
  }
  
  // Example usage
  const data = 'login.php'; // Replace with your login URL
  const containerId = 'qr-container'; // Replace with the ID of the HTML element to hold the QR code
  
  generateQRCode(data, containerId);