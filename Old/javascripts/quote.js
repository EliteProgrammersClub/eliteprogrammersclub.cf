var quotations = new Array();

    quotations[0]="\"Debugging is twice as hard as writing the program, so if you write the program as cleverly as you can, by definition, you won't be clever enough to debug it\". <br/><span class='post-author'>—Kernighan's Law</span>";

    quotations[1]="\"Computer science education cannot make anybody an expert programmer any more than studying brushes and pigment can make somebody an expert painter\"<br /><span class='post-author'>—Eric Raymond</span>";

    quotations[2]="\"Considering the current sad state of our computer programs, software development is clearly still a black art, and cannot yet be called an engineering discipline.\"<br /><span class='post-author'>—Bill Clinton</span>";

   quotations[3]="\"Measuring programming progress by lines of code is like measuring aircraft building progress by weight.\"<br /><span class='post-author'>—Bill Gates</span>";

    quotations[4]="\"Programs must be written for people to read, and only incidentally for machines to execute. \"<br /><span class='post-author'>—Harold Abelson</span>";

    quotations[5]="\"The sooner you start to code, the longer the program will take. \"<br /><span class='post-author'>—Roy Carlson</span>";

    quotations[6]="\"There are two ways of constructing a software design. One way is to make it so simple that there are obviously no deficiencies. And the other way is to make it so complicated that there are no obvious deficiencies. \"<br /><span class='post-author'>—Charles Antony</span>";

    quotations[7]="\"Programmers, by nature, want to write good programs. When the completion of a program becomes more important than having a good program, then said program is neither good nor complete.\"<br /><span class='post-author'>—James D. Shea</span>";

   quotations[8]="\"The best thing about a boolean is even if you are wrong, you are only off by a bit.\"<br /><span class='post-author'>— Bryan</span>";

    quotations[9]="\"In theory, theory and practice are the same. In practice, they aren't even close. It can be applied to many fields, but goes great with programming.\"<br /><span class='post-author'>—Tudor Vlad</span>";

    quotations[10]="\"Programming today is a race between software engineers striving to build bigger and better idiot-proof programs, and the Universe trying to produce bigger and better idiots. So far, the Universe is winning.\"<br /><span class='post-author'>—Rich Cook</span>";

    quotations[11]="\"C programmers never die. They are just cast into void.\"<br /><span class='post-author'>—TixXio</span>";

    quotations[12]="\"Perfection [in design] is achieved, not when there is nothing more to add, but when there is nothing left to take away\"<br /><span class='post-author'>— Antoine de Saint-Exupry</span>";

    quotations[13]="\"Computer science education cannot make anybody an expert programmer any more than studying brushes and pigment can make somebody an expert painter.\"<br /><span class='post-author'>— Eric Raymon</span>";

    quotations[14]="\"Talk is cheap. Show me the code.\"<br /><span class='post-author'>— Linus Torvalds</span>";

    quotations[15] ="\"When in doubt, use brute force\"<br /><span class='post-author'>— Ken Thompson</span>";

    quotations[16] = "\"First, solve the problem. Then, write the code.\"<br /><span class='post-author'>— John Johnson</span>";

    quotations[17] ="\"Complexity kills. It sucks the life out of developers, it makes products difficult to plan, build and test, it introduces security challenges and it causes end-user and administrator frustration.\"<br /><span class='post-author'>— Ray Ozzie</span>";

    quotations[18] = "\" Good code is its own best documentation. As you're about to add a comment, ask yourself, 'How can I improve the code so that this comment isn't needed?' Improve the code and then document it to make it even clearer.\"<br /><span class='post-author'>— Steve McConnell</span>";

    quotations[19] ="\"People want success but keep running away from problems and yet it is only in tackling problems that success is achieved\"";

function writeQuotes()
{
  markupHTML="<h1><span>Quote of the Moment</span></h1><ul class='rslides' id='rslides'>";
  for (var i = 0; i < quotations.length; i++)
  {

    markupHTML += "<li>" + quotations[i] + "</li>";
  }

  markupHTML += "</ul>"
  document.write(markupHTML);
}




