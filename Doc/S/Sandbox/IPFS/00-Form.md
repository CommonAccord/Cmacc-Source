Model.Root={Head.Div}{Among.Div}{This.Div}{Why.Div}{That.Div}{Sec.Div}{SignaturePageBreak}{By.Div}{Annex.Div}

Head.Div={Head.Message}<center>{Head.Sec}</center><br><br>

Head.Message=<font color="grey">GUID: {Doc.GUID}</font>

Head.Sec=<h4>{Doc.Ti}</h4>{Head.sec}

Head.sec={Head.PartyList.sec}<br>{Head.EffectiveDate.sec}

Note=Parties:

Among.Div={Among.Sec}{Friends.Div}<br>

Note=Friends.Div is for documents that need to list other persons, for instance affiliates of one of the parties.  Defaults to not included.

Friends.Div=</i>

Note=Why is the Recitals section

Why.Div=<br><br>{Why.Sec}

Why.Sec=<b>{Why.Ti}</b><br>{Why.sec}

Why.sec=<ul type="none"><li>{Why.Secs}</li></ul>

This.Div=<br>{This.Sec}<br>

This.Sec={This.sec}

That.Div=<br>{That.Sec}<br>

That.Sec={That.sec}

Sec.Div=<br>{Sec}<br>

By.Div=<br>{By.Sec}<br>

Annex.Div=<hr><hr>{Annex.Sec}

Annex.Sec=<b><center>{Annex.Ti}</center></b><br>{Annex.sec}

Note=Kit and choices:

Head.PartyList.sec={Head.PartyList/2}

Head.PartyList/2={P1.Name.Full}<br>{P2.Name.Full}

Head.PartyList/3={P1.Name.Full}<br>{P2.Name.Full}<br>{P3.Name.Full}

Head.PartyList/4={P1.Name.Full}<br>{P2.Name.Full}<br>{P3.Name.Full}<br>{P4.Name.Full}

Among.Sec=<b>{Among.Ti}</b><br>{Among.sec}

Among.sec={Among.Secs}

Among.Secs={Among.Secs/2}

Among.Secs/2=<ul type="none" style="padding-left: 0"><li>{P1.Among.Sec}</li><li>{P2.Among.Sec}</li></ul>

Among.Secs/3=<ul type="none" style="padding-left: 0"><li>{P1.Among.Sec}</li><li>{P2.Among.Sec}</li><li>{P3.Among.Sec}</li><li>{P4.Among.Sec}</li></ul>

Among.Secs/4=<ul type="none" style="padding-left: 0"><li>{P1.Among.Sec}</li><li>{P2.Among.Sec}</li><li>{P3.Among.Sec}</li><li>{P4.Among.Sec}</li></ul>

By.Sec=<b>{By.Ti}</b><br>{By.sec}

By.sec={By.0.sec}<br>{By.Secs}

By.Secs={By.Secs/2}

By.Secs/2=<ul type="none" style="padding-left: 0"><li>{P1.By.Sec}</li><li>{P2.By.Sec}</li></ul>

By.Secs/3=<ul type="none" style="padding-left: 0"><li>{P1.By.Sec}</li><li>{P2.By.Sec}</li><li>{P3.By.Sec}</li></ul>

By.Secs/4=<ul type="none" style="padding-left: 0"><li>{P1.By.Sec}</li><li>{P2.By.Sec}</li><li>{P3.By.Sec}</li><li>{P4.By.Sec}</li></ul>