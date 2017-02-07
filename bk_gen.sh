#!/bin/bash
# scrap_dir=/home/m/.mozilla/firefox/aagiok5y.default/ScrapBook
scrap_dir=.
bmark_content_file=$scrap_dir/bmark_content.html
[ -f $bmark_content_file ] && rm -rf $bmark_content_file
data_dir=$scrap_dir/data
art_dir_list=`ls $data_dir | xargs`
for art_id in $art_dir_list
do 
	art_url=$data_dir/$art_id/index.html
	# art_title=`curl -s $art_url | grep \<title | sed 's/<[^<]*>//g'`
	art_title=`cat $art_url | grep \<title | sed 's/<[^<]*>//g'`
	echo \<a href=\"$art_url\"\>$art_title\</a\>\<br\>\<br\> >> $scrap_dir/bmark_content.html
	sed -i 's/<!--</</g' $scrap_dir/bmark_content.html
	sed -i 's/>-->/>/g' $scrap_dir/bmark_content.html
done


index_file=$scrap_dir/index.html
[ -f $index_file ] && rm -rf $index_file
cat << END				>> $index_file
<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
<title>bookmark for scrapbook</title>
</head>
<body>
END
cat << END				>> $index_file
 <div id="html_1"><iframe align="center" width="950" height="170" src="./bmark_content.html" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></div>
END
cat << END				>> $index_file
</body>
</html>
END
