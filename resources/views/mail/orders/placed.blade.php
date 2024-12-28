<x-mail::message>
# 🎉 Order Confirmation  

Hi {{ $order->customer_name }},  

Thank you for shopping with 3M TECH! We're excited to let you know that your order has been successfully placed.  

### **Order Details**  
- **Order Number:** #{{ $order->id }}
- **Order Date:** {{ $order->created_at->format('F j, Y') }}  


You can view the full details of your order by clicking the button below.

<x-mail::button :url="$url" color="success">
View My Order
</x-mail::button>

---

### 📦 **What's Next?**  
- **Processing:** Your order is being prepared.
- **Shipping:** You will receive an update once your package is shipped.
- **Delivery:** Track your package anytime using your account.

If you have any questions or need further assistance, feel free to reach out to our support team.  

Thanks for choosing 3M TECH  

---

<x-mail::subcopy>
If you’re unable to click the button, copy and paste the following link into your browser: [{{ $url }}]({{ $url }})
</x-mail::subcopy>
</x-mail::message>
