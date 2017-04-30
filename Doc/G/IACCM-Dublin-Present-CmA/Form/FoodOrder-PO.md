Doc.Ti=Common Food Supply Purchase Order ("{_PO}")

0.sec={Parties.Sec}

Parties.Ti=Parties:

Parties.sec=<table><tr><td>"{_P1}":<br>{P1.US.Adr.N/1/2}<td/><td>          </td><td>"{_P2}":<br>{P2.US.Adr.N/1/2}</td></tr></table>

Parties.=[G/Z/ol/Base]

1.Ti=Supply

1.sec={Order.sec}

Order.0.sec={_P2} will supply the following list of items (the "{_Order}"):

Order.00.sec={Order.Total.sec}

Order.Total.sec=The total price for the {_Order} is {Order.Total.Price}.

Order.=[G/Z/ol/s10]

Order.secs={Order.Items.Number}

Order.Items.1={Order.1.sec}

Order.Items.2={Order.1.sec}<li>{Order.2.sec}

Order.Items.3={Order.1.sec}<li>{Order.2.sec}<li>{Order.3.sec}

Order.Items.4={Order.1.sec}<li>{Order.2.sec}<li>{Order.3.sec}<li>{Order.4.sec}

Order.Items.5={Order.1.sec}<li>{Order.2.sec}<li>{Order.3.sec}<li>{Order.4.sec}<li>{Order.5.sec}

Order.Items.6={Order.1.sec}<li>{Order.2.sec}<li>{Order.3.sec}<li>{Order.4.sec}<li>{Order.5.sec}<li>{Order.6.sec}


2.Ti=Delivery

2.1.sec={_P2} will deliver the {_Order} to {_P1} at {P1.US.Adr.1,2}.

2.2.sec=Delivery will be completed by {Order.DueBy.Time}.  The hours during which {_P1} receives deliveries are {P1.ReceivingHours.cl}.

2.=[G/Z/ol/s2]


3.Ti=Compensation

3.sec={_P1} will pay {_P2} a total of {Order.Total.Price}.

4.Ti=Master Agreement Terms

4.1.sec=This {_PO} is subject to the terms of a master agreement titled "{MSA.Doc.Ti}," dated {MSA.EffectiveDate.YMD} identified as Document number {MSA.Doc.GUID}, and referenced below.

4.2.sec=<b>This {_PO} has no effect unless the parties have a master agreement.</b>

4.=[G/Z/ol/s2]

00.sec={Sign.Sec}

Sign.Ti=Signatures:

Sign.sec=<table><tr><td>{P1.US.Frame.Sign.Sec}<td/><td>          </td><td>{P2.US.Frame.Sign.Sec}</td></tr></table>

Sign.=[G/Z/ol/Base]

_P1=<a href="#" class="definedterm">Restaurant</a>

_P2=<a href="#" class="definedterm">Food Supplier</a>

_PO=<a href="#" class="definedterm">PO</a>

_Order=<a href="#" class="definedterm">Order</a>

P1.Handle={_P1}

P2.Handle={_P2}

Model.Root={Doc}

View1.Sec={Doc}<hr><hr>{MSA.Doc}

=[G/Z/ol/4]