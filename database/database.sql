-- CREATE VIEW normalisasi AS
SELECT ak.id_alternatif, ak.id_kriteria,
CASE k.cost_benefit 
WHEN 'C' THEN mm.min_max / ak.data
WHEN 'B' THEN ak.data / mm.min_max
END 'data_normal'
FROM alternatif_kriteria ak 
JOIN kriteria k ON ak.id_kriteria = k.id_kriteria
JOIN min_max mm ON ak.id_kriteria = mm.id_kriteria;

-- CREATE VIEW hasil_akhir AS
SELECT n.id_alternatif, n.id_kriteria,
ROUND(n.data_normal * k.bobot_kriteria, 2) AS hasil_normalisasi
FROM normalisasi n 
JOIN kriteria k ON n.id_kriteria = k.id_kriteria;

-- CREATE VIEW rangking AS
SELECT id_alternatif,
SUM(hasil_normalisasi) AS jumlah,
RANK() OVER (
ORDER BY jumlah DESC
) AS rank_no
FROM hasil_akhir
GROUP BY id_alternatif