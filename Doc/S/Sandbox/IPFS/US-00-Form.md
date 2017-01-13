This.sec={This.sec/2}

This.sec/2=This {Doc.Ti} (this "{_Agreement}") is made as of {EffectiveDate.YMD} ("{_Effective_Date}"), by and between the {_parties}.

This.sec/3=This {Doc.Ti} (this "{_Agreement}") is made as of {EffectiveDate.YMD} ("{_Effective_Date}"), by and among the {_parties}.

Among.Ti={Among.Ti/2}

Among.Ti/2=By and Between

Among.Ti/3=By and Among

Among.Def.sec=Each a "{_party}" and collectively the "{_parties}."

Friend.Ti=Affiliated persons referenced in this {_Agreement}:

Why.Ti=Recitals

That.sec=In consideration of the mutual promises contained in {_this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {_parties} agree as follows:

Friend.Def.sec=Each a "{_Named_Third_Party}" and collectively the "{_Named_Third_Parties}."

By.Ti=Signature

By.0.sec=IN WITNESS WHEREOF, the {_parties} have executed {_this_Agreement} as of the {_Effective_Date}.

Annex.Ti=Attachments

Note=The following is copied from -S/Sandbox/IPFS/00-Form.md-

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