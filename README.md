Instructions
------------
Navigate to index.php and type any combination of letters between A-D. <br>
The subtotal price after discounts will display below the form. <br>
This cart is in response to the prompt below.<br>

"Consider a store where items have prices per unit but also volume
prices. For example, apples may be $1.00 each or 4 for $3.00.

Implement a point-of-sale scanning API that accepts an arbitrary
ordering of products (similar to what would happen at a checkout line)
and then returns the correct total price for an entire shopping cart
based on the per unit prices or the volume prices as applicable.

Here are the products listed by code and the prices to use (there is
no sales tax): <br>
Product Code | Price <br>
A            | $2.00 each or 4 for $7.00 <br>
B            | $12.00 <br>
C            | $1.25 or $6 for a six pack <br>
D            | $0.15 <br>

There should be a top level point of sale terminal service object that
looks something like the pseudo-code below. You are free to design and
implement the rest of the code however you wish, including how you
specify the prices in the system:

terminal->setPricing(...)<br>
terminal->scan("A")<br>
terminal->scan("C")<br>
... etc.<br>
result = terminal->total<br>

Here are the minimal inputs you should use for your test cases. These
test cases must be shown to work in your program:

Scan these items in this order: ABCDABAA; Verify the total price is $32.40.<br>
Scan these items in this order: CCCCCCC; Verify the total price is $7.25.<br>
Scan these items in this order: ABCD; Verify the total price is $15.40."<br>

