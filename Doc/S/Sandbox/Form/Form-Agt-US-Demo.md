Note=To make our standards-based contract, we reference the form of agreement.  This is the base, and therefore at the bottom of this page.  We then add some elements.  This demo now uses the materials at <a href="https://github.com/CommonAccord/Form-Agt">https://github.com/CommonAccord/Form-Agt</a>.

Note=First we list a few "parameters"

Doc.Ti=Our Test Agreement

EffectiveDate.YMD=2017-01-21

P1.Handle=Party One

P2.Handle=Party Two

Why.Secs=To test this frame for making agreements.

P1.Sign.YMD=2017-01-23

P2.Sign.YMD=2017-01-22

Note=Px (P1, P2, P3, P4) is for the various parties.

P1.=[U/id/acme_incorporated.md]

P2.=[U/id/abigail_altima.md]

Note=Miscellaneous provisions are referenced.  We prefix with Misc.

Misc.=[F/US/00/Agt/Sec/Misc/0.md]

Misc.Entire.Xnum=1.4

Def.=[F/US/00/Agt/Sec/Def/0.md]

Note=We reference the defined terms.  We prefix them with "_", consistent with our naming scheme.  This also has the effect of reducing the possibility of naming conflicts and confusions.   The defined terms are done as hyperlinks.  In the Document view, they navigate to the definition if the definition is organized in the document as "Def.Defined_Term.Def".  (The "Document" view wraps each span in an html anchor.) (The first "Def." is the section of the documents, the second ".Def" is the format of the text, analogous to ".Sec".)  

_=[F/US/00/Agt/Sec/DefinedTerm/0.md]

sec={Consult.sec}

=[?https://raw.githubusercontent.com/CommonAccord/Form-Agt/master/US-v0.md]

=[?https://raw.githubusercontent.com/CommonAccord/Agt-Sec-US/master/00-v0.md]