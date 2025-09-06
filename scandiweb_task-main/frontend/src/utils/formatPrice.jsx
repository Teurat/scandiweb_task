export default function formatPrice(amount, currency = '$') {
  return `${currency}${amount.toFixed(2)}`;
}
