Note=This file is presented in roughly the order in which the page is built.  The "Model.Root" expands into its list, etc.

Model.Root={Head.Div}{Among.Div}{This.Div}{Why.Div}{That.Div}{Sec.Div}{By.Div}{Annex.Div}

Head.Div={Head.Message}<center>{Head.Sec}</center><br><br>

Head.Message=<font color="grey">GUID: {Doc.GUID}</font>

Head.Sec=<h4>{Doc.Ti}</h4>{Head.sec}

Head.sec={Head.PartyList.sec}<br>{Head.EffectiveDate.sec}

Head.PartyList.sec={Head.PartyList/2}

Head.PartyList/2={P1.Name.Full}<br>{P2.Name.Full}

Head.PartyList/3={P1.Name.Full}<br>{P2.Name.Full}<br>{P3.Name.Full}

Head.PartyList/4={P1.Name.Full}<br>{P2.Name.Full}<br>{P3.Name.Full}<br>{P4.Name.Full}

Note=Parties:

Among.Div={Among.Sec}{Friends.Div}<br>

Among.Ti={Among.Ti/2}

Among.Ti/2=By and Between

Among.Ti/3=By and Among

Among.Sec=<b>{Among.Ti}</b><br>{Among.secs}{Among.Def.sec}

Among.secs={Among.secs/2}

Among.secs/2=<ul type="none" style="padding-left: 0"><li>{P1.US.Contract.Among.Sec}</li><li>{P2.US.Contract.Among.Sec}</li></ul>

Among.Secs/3=<ul type="none" style="padding-left: 0"><li>{P1.US.Contract.Among.Sec}</li><li>{P2.US.Contract.Among.Sec}</li><li>{P3.US.Contract.Among.Sec}</li><li>{P4.US.Contract.Among.Sec}</li></ul>

Among.Secs/4=<ul type="none" style="padding-left: 0"><li>{P1.US.Contract.Among.Sec}</li><li>{P2.US.Contract.Among.Sec}</li><li>{P3.US.Contract.Among.Sec}</li><li>{P4.US.Contract.Among.Sec}</li></ul>

Among.Def.sec=Each a "{_party}" and collectively the "{_parties}."

Note=Friends.Div is for documents that need to list other persons, for instance affiliates of one of the parties.  Defaults to null.  To use it, define a paragraph with the desired number of referenced persons in the format "Friend.=[Z/ol/s*]" where * is the number of persons, e.g, "Friend.=[Z/ol/s3]".  This uses the common paragraph format widget.

Friends.Div=</i>

Friend.Ti=Affiliated persons referenced in this {_Agreement}:

Friend.00.sec={Friend.Def.sec}

Friend.Def.sec=Each a "{_Named_Third_Party}" and collectively the "{_Named_Third_Parties}."

Note=This.* is the part that usually starts with "This Agreement ...."

This.Div=<br>{This.Sec}<br>

This.Sec={This.sec}

This.sec={This.sec/2}

This.sec/2=This {Doc.Ti} (this "{_Agreement}") is made as of {EffectiveDate.YMD} ("{_Effective_Date}"), by and between the {_parties}.

This.sec/3=This {Doc.Ti} (this "{_Agreement}") is made as of {EffectiveDate.YMD} ("{_Effective_Date}"), by and among the {_parties}.


Note=Why.* is the Recitals section

Why.Div=<br><br>{Why.Sec}

Why.Sec=<b>{Why.Ti}</b><br>{Why.sec}

Why.sec=<ul type="none"><li>{Why.Secs}</li></ul>

Note=That.* is the part that often says "The parties therefore ...."
 
That.Div=<br>{That.Sec}<br>

That.Sec={That.sec}


Why.Ti=Recitals

That.sec=In consideration of the mutual promises contained in {_this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {_parties} agree as follows:

Note=Sec.* is the sections of the agreement - the principal text.  There is an option for a heading, but that is rare.  We also include a default set of top-level subject matter divisions.

Sec.Div=<br>{Sec}<br>

Sec={sec}

sec=<ol>{Param.LI}{Provision.LI}{Def.LI}</ol>

Provision.LI={Deal.LI}{Cov.LI}{Cond.LI}{Rep.LI}{Life.LI}{Claim.LI}{Misc.LI}

By.Div=<br>{By.Sec}<br>

By.Sec=<b>{By.Ti}</b><br>{By.sec}

By.Ti=Signature

By.sec={By.0.sec}<br>{By.secs}

By.0.sec=IN WITNESS WHEREOF, the {_parties} have executed {_this_Agreement} as of the {_Effective_Date}.

By.secs={By.secs/2}

By.secs/2=<table><tr><td valign=top>{P1.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.US.Contract.By.Sec}</td></tr></table>

By.secs/3=<table><tr><td valign=top>{P1.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.US.Contract.By.Sec}</td></tr><tr><td valign=top>{P3.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top></td></tr></table>

By.secs/4=<table><tr><td valign=top>{P1.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.US.Contract.By.Sec}</td></tr><tr><td valign=top>{P3.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P4.US.Contract.By.Sec}</td></tr></table>
 
Annex.Div=<hr><hr>{Annex.Sec}

Annex.Sec=<b><center>{Annex.Ti}</center></b><br>{Annex.sec}

Annex.Ti=Attachments