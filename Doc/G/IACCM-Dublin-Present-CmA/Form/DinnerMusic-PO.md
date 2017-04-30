Doc.Ti=Dinner Music Purchase Order

0.sec={Parties.Sec}

Parties.Ti=Parties:

Parties.sec=<table><tr><td>"{_P1}":<br>{P1.US.Adr.N/1/2}<td/><td>          </td><td>"{_P2}":<br>{P2.US.Adr.N/1/2}</td></tr></table>

Parties.=[G/Z/ol/Base]

1.Ti=Service

1.1.sec=Perform music at {_P1}'s restaurant, located at {P1.US.Adr.1,2}.

1.2.0.sec=The performance will be during the period of:

1.2.1.sec=Start time:  {Performance.Time.Start} until 

1.2.2.sec=End time:  {Performance.Time.Stop}.  

1.2.00.sec={_P2} may pause during the performance period and leave the performance area for a total of not more than {Performance.Time.PauseLength}.

1.2.=[G/Z/ol/s2]
  
1.=[G/Z/ol/s2]
  
2.Ti=Compensation

2.sec={_P1} will pay {_P2} a total, fixed fee of {Performance.Price} for the performance.  

3.Ti=Terms

3.1.sec=This SOW is subject to the terms of a master agreement titled "{MSA.Doc.Ti}," dated {MSA.EffectiveDate.YMD} identified as Document number {MSA.Doc.GUID}, and referenced below.

3.2.sec=<b>The PO has no effect unless the parties have a master agreement.</b>

3.=[G/Z/ol/s2]

00.sec={Sign.Sec}

Sign.Ti=Signatures:

Sign.sec=<table><tr><td>{P1.US.Frame.Sign.Sec}<td/><td>          </td><td>{P2.US.Frame.Sign.Sec}</td></tr></table>

Sign.=[G/Z/ol/Base]

_P1=<a href="#" class="definedterm">Client</a>

_P2=<a href="#" class="definedterm">Entertainer</a>

P1.Handle={_P1}

P2.Handle={_P2}

Model.Root={Doc}

View1.Sec={Doc}<hr><hr>{MSA.Doc}

=[G/Z/ol/3]
