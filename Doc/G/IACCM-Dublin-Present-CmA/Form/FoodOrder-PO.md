MSA.EffectiveDate.YMD={MSA Effective Date}

MSA.Doc.GUID={MSA Document Number}

Doc.Ti=Common Food Supply Purchase Order ("{_PO}")

0.sec={Parties.Sec}

Parties.Ti=Parties:

Parties.sec=<table><tr><td>"{_P1}":<br>{P1.US.Adr.N/1/2}<td/><td>          </td><td>"{_P2}":<br>{P2.US.Adr.N/1/2}</td></tr></table>

Parties.=[G/Z/ol/Base]

Order.Ti=Order

Order.0.sec={_P2} will supply the following list of items (the "{_Order}"):

Order.00.sec={Order.Total.sec}

Order.Total.sec=The total price for the {_Order} is {Order Total Price}.

Order.=[G/Z/ol/s2]

Order.secs={Ordered Items}

1 Item={Order Item 1}

2 Items={Order Item 1}<li>{Order Item 2}

3 Items={Order Item 1}<li>{Order Item 2}<li>{Order Item 3}

4 Items={Order Item 1}<li>{Order Item 2}<li>{Order Item 3}<li>{Order Item 4}

5 Items={Order Item 1}<li>{Order Item 2}<li>{Order Item 3}<li>{Order Item 4}<li>{Order Item 5}

6 Items={Order Item 1}<li>{Order Item 2}<li>{Order Item 3}<li>{Order Item 4}<li>{Order Item 5}<li>{Order Item 6}

Delivery.Ti=Delivery

Delivery.1.sec={_P2} will deliver the {_Order} to {_P1} at {P1.US.Adr.1,2}.

Delivery.2.sec=Delivery will be completed by {Delivery Due By}.  The hours during which {_P1} receives deliveries are {Client Reception Hours}.
 
Delivery.=[G/Z/ol/s2]

Comp.Ti=Compensation

Comp.sec={_P1} will pay {_P2} a total of {Order Total Price}.

Comp.=[G/Z/ol/Base]

Terms.Ti=Master Agreement Terms

Terms.1.sec=This {_PO} is subject to the terms of a master agreement titled "{MSA.Doc.Ti}," dated {MSA.EffectiveDate.YMD} identified as Document number {MSA.Doc.GUID}, and referenced below.

Terms.2.sec=<b>This {_PO} has no effect unless the parties have a master agreement.</b>

Terms.=[G/Z/ol/s2]

00.sec={Sign.Sec}

Sign.Ti=Signatures:

Sign.sec=<table><tr><td>{P1.US.Frame.Sign.Sec}<td/><td>          </td><td>{P2.US.Frame.Sign.Sec}</td></tr></table>

Sign.=[G/Z/ol/Base]

_P1=<a href="#" class="definedterm">Restaurant</a>

_P2=<a href="#" class="definedterm">Food Supplier</a>

_Annex=<a href="#" class="definedterm">Annex</a>

_PO=<a href="#" class="definedterm">PO</a>

_Order=<a href="#" class="definedterm">Order</a>

P1.Handle={_P1}

P2.Handle={_P2}

Model.Root={Doc}<hr><hr>{MSA.Doc}

Secs={Order.lI}{Delivery.LI}{Comp.LI}{Terms.Li}

MSA.Doc=</i>

=[G/Z/ol/Base]