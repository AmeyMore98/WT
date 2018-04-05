<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
	<title>XML</title>
</head>
<body>
	<h1>Bookstore</h1>
	<table border="1">
		<tr bgcolor="grey">
			<td>Title</td>
			<td>Author</td>
			<td>ISBN</td>
			<td>Publisher</td>
			<td>Edition</td>
			<td>Price</td>
		</tr>
		<xsl:for-each select="bookstore/book">
			<tr>
				<td bgcolor="violet"><xsl:value-of select="title"/></td>
				<td bgcolor="red" style="font-weight:bold; text-transform:capitalize;"><xsl:value-of select="author"/></td>
				<td bgcolor="blue"><xsl:value-of select="isbn"/></td>
				<td bgcolor="green"><xsl:value-of select="publisher"/></td>
				<td bgcolor="yellow"><xsl:value-of select="edition"/></td>
				<td bgcolor="orange"><xsl:value-of select="price"/></td>
			</tr>
		</xsl:for-each>
	</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>