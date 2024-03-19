package redes.facilitador;

import java.awt.Image;
import java.io.File;
import javax.swing.ImageIcon;
import javax.swing.JFileChooser;
import javax.swing.JTextField;
import javax.swing.filechooser.FileNameExtensionFilter;

/**
 * @author César Alejandro Montaño Cortés"
 */
public class Automatizar extends javax.swing.JFrame {

    public Automatizar() {
        initComponents();
        //rellenarComboBox();
        this.setLocationRelativeTo(null);
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        pnlPrincipal = new javax.swing.JPanel();
        pnlGeneral = new javax.swing.JPanel();
        lblTituloTarea = new javax.swing.JLabel();
        txtTituloTarea = new javax.swing.JTextField();
        pnlHorario = new javax.swing.JPanel();
        lblHora = new javax.swing.JLabel();
        lblMinutos = new javax.swing.JLabel();
        txtHora = new javax.swing.JTextField();
        txtMinutos = new javax.swing.JTextField();
        lblUbicacion = new javax.swing.JLabel();
        txtUbicacion = new javax.swing.JTextField();
        lblNombreFinal = new javax.swing.JLabel();
        pnlInformacion = new javax.swing.JPanel();
        lblArchivo = new javax.swing.JLabel();
        txtArchivo = new javax.swing.JTextField();
        comboLista = new javax.swing.JComboBox<>();
        lblEstaciones = new javax.swing.JLabel();
        comboIP = new javax.swing.JComboBox<>();
        lblIP = new javax.swing.JLabel();
        btnArchivo = new javax.swing.JButton();
        btnUbicacion = new javax.swing.JButton();
        lblTitulo = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Automatizar");
        setLocation(new java.awt.Point(0, 0));
        setResizable(false);

        pnlPrincipal.setBackground(new java.awt.Color(255, 255, 255));

        pnlGeneral.setBackground(new java.awt.Color(255, 255, 255));
        pnlGeneral.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));

        lblTituloTarea.setFont(new java.awt.Font("Segoe UI", 0, 14)); // NOI18N
        lblTituloTarea.setForeground(new java.awt.Color(0, 0, 0));
        lblTituloTarea.setText("Título");

        txtTituloTarea.setBackground(new java.awt.Color(255, 255, 255));

        pnlHorario.setBackground(new java.awt.Color(255, 255, 255));
        pnlHorario.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Horario", javax.swing.border.TitledBorder.LEFT, javax.swing.border.TitledBorder.TOP, new java.awt.Font("Segoe UI", 0, 14), new java.awt.Color(0, 0, 0))); // NOI18N
        pnlHorario.setForeground(new java.awt.Color(0, 0, 0));

        lblHora.setForeground(new java.awt.Color(0, 0, 0));
        lblHora.setText("Hora");

        lblMinutos.setForeground(new java.awt.Color(0, 0, 0));
        lblMinutos.setText("Minutos");

        txtHora.setBackground(new java.awt.Color(255, 255, 255));
        txtHora.setForeground(new java.awt.Color(0, 0, 0));

        txtMinutos.setBackground(new java.awt.Color(255, 255, 255));
        txtMinutos.setForeground(new java.awt.Color(0, 0, 0));

        javax.swing.GroupLayout pnlHorarioLayout = new javax.swing.GroupLayout(pnlHorario);
        pnlHorario.setLayout(pnlHorarioLayout);
        pnlHorarioLayout.setHorizontalGroup(
            pnlHorarioLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlHorarioLayout.createSequentialGroup()
                .addGap(28, 28, 28)
                .addGroup(pnlHorarioLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addGroup(pnlHorarioLayout.createSequentialGroup()
                        .addComponent(lblMinutos)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(txtMinutos, javax.swing.GroupLayout.PREFERRED_SIZE, 150, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(pnlHorarioLayout.createSequentialGroup()
                        .addComponent(lblHora)
                        .addGap(31, 31, 31)
                        .addComponent(txtHora, javax.swing.GroupLayout.PREFERRED_SIZE, 150, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        pnlHorarioLayout.setVerticalGroup(
            pnlHorarioLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlHorarioLayout.createSequentialGroup()
                .addGap(19, 19, 19)
                .addGroup(pnlHorarioLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lblHora)
                    .addComponent(txtHora, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(pnlHorarioLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lblMinutos)
                    .addComponent(txtMinutos, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(21, Short.MAX_VALUE))
        );

        lblUbicacion.setForeground(new java.awt.Color(0, 0, 0));
        lblUbicacion.setText("Ubicación");

        txtUbicacion.setBackground(new java.awt.Color(255, 255, 255));
        txtUbicacion.setForeground(new java.awt.Color(0, 0, 0));

        lblNombreFinal.setFont(new java.awt.Font("Segoe UI", 0, 10)); // NOI18N

        pnlInformacion.setBackground(new java.awt.Color(255, 255, 255));
        pnlInformacion.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Información", javax.swing.border.TitledBorder.LEFT, javax.swing.border.TitledBorder.TOP, new java.awt.Font("Segoe UI", 0, 14), new java.awt.Color(0, 0, 0))); // NOI18N
        pnlInformacion.setForeground(new java.awt.Color(0, 0, 0));

        lblArchivo.setForeground(new java.awt.Color(0, 0, 0));
        lblArchivo.setText("Archivo");

        txtArchivo.setBackground(new java.awt.Color(255, 255, 255));
        txtArchivo.setForeground(new java.awt.Color(0, 0, 0));

        comboLista.setBackground(new java.awt.Color(255, 255, 255));
        comboLista.setForeground(new java.awt.Color(0, 0, 0));

        lblEstaciones.setForeground(new java.awt.Color(0, 0, 0));
        lblEstaciones.setText("Estaciones");

        comboIP.setBackground(new java.awt.Color(255, 255, 255));
        comboIP.setForeground(new java.awt.Color(0, 0, 0));

        lblIP.setForeground(new java.awt.Color(0, 0, 0));
        lblIP.setText("IP");

        btnArchivo.setText("jButton1");
        btnArchivo.setMaximumSize(new java.awt.Dimension(75, 22));
        btnArchivo.setMinimumSize(new java.awt.Dimension(75, 22));
        btnArchivo.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnArchivoActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout pnlInformacionLayout = new javax.swing.GroupLayout(pnlInformacion);
        pnlInformacion.setLayout(pnlInformacionLayout);
        pnlInformacionLayout.setHorizontalGroup(
            pnlInformacionLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlInformacionLayout.createSequentialGroup()
                .addGap(16, 16, 16)
                .addGroup(pnlInformacionLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(pnlInformacionLayout.createSequentialGroup()
                        .addComponent(lblArchivo)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(txtArchivo, javax.swing.GroupLayout.PREFERRED_SIZE, 164, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(btnArchivo, javax.swing.GroupLayout.PREFERRED_SIZE, 31, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(pnlInformacionLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                        .addGroup(pnlInformacionLayout.createSequentialGroup()
                            .addComponent(lblIP)
                            .addGap(18, 18, 18)
                            .addComponent(comboIP, javax.swing.GroupLayout.PREFERRED_SIZE, 217, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGroup(pnlInformacionLayout.createSequentialGroup()
                            .addComponent(lblEstaciones)
                            .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                            .addComponent(comboLista, javax.swing.GroupLayout.PREFERRED_SIZE, 184, javax.swing.GroupLayout.PREFERRED_SIZE))))
                .addContainerGap(17, Short.MAX_VALUE))
        );
        pnlInformacionLayout.setVerticalGroup(
            pnlInformacionLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlInformacionLayout.createSequentialGroup()
                .addGap(14, 14, 14)
                .addGroup(pnlInformacionLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lblArchivo)
                    .addComponent(txtArchivo, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(btnArchivo, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(pnlInformacionLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(comboLista, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(lblEstaciones))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(pnlInformacionLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(comboIP, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(lblIP))
                .addContainerGap(18, Short.MAX_VALUE))
        );

        btnUbicacion.setText("jButton1");
        btnUbicacion.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnUbicacionActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout pnlGeneralLayout = new javax.swing.GroupLayout(pnlGeneral);
        pnlGeneral.setLayout(pnlGeneralLayout);
        pnlGeneralLayout.setHorizontalGroup(
            pnlGeneralLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlGeneralLayout.createSequentialGroup()
                .addGap(22, 22, 22)
                .addGroup(pnlGeneralLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(lblNombreFinal, javax.swing.GroupLayout.PREFERRED_SIZE, 286, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(pnlGeneralLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                        .addGroup(pnlGeneralLayout.createSequentialGroup()
                            .addComponent(lblTituloTarea)
                            .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                            .addComponent(txtTituloTarea))
                        .addComponent(pnlHorario, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(pnlInformacion, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                    .addGroup(pnlGeneralLayout.createSequentialGroup()
                        .addComponent(lblUbicacion)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(txtUbicacion, javax.swing.GroupLayout.PREFERRED_SIZE, 190, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(btnUbicacion, javax.swing.GroupLayout.PREFERRED_SIZE, 31, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addGap(0, 23, Short.MAX_VALUE))
        );
        pnlGeneralLayout.setVerticalGroup(
            pnlGeneralLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlGeneralLayout.createSequentialGroup()
                .addGap(20, 20, 20)
                .addGroup(pnlGeneralLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lblTituloTarea)
                    .addComponent(txtTituloTarea, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(pnlHorario, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(pnlInformacion, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addGroup(pnlGeneralLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lblUbicacion)
                    .addComponent(txtUbicacion, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(btnUbicacion))
                .addGap(18, 18, 18)
                .addComponent(lblNombreFinal)
                .addContainerGap(58, Short.MAX_VALUE))
        );

        lblTitulo.setForeground(new java.awt.Color(0, 0, 0));
        lblTitulo.setText("FACILITADOR");

        javax.swing.GroupLayout pnlPrincipalLayout = new javax.swing.GroupLayout(pnlPrincipal);
        pnlPrincipal.setLayout(pnlPrincipalLayout);
        pnlPrincipalLayout.setHorizontalGroup(
            pnlPrincipalLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlPrincipalLayout.createSequentialGroup()
                .addGap(48, 48, 48)
                .addGroup(pnlPrincipalLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(lblTitulo)
                    .addComponent(pnlGeneral, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(47, Short.MAX_VALUE))
        );
        pnlPrincipalLayout.setVerticalGroup(
            pnlPrincipalLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(pnlPrincipalLayout.createSequentialGroup()
                .addGap(24, 24, 24)
                .addComponent(lblTitulo)
                .addGap(18, 18, 18)
                .addComponent(pnlGeneral, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(44, Short.MAX_VALUE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(pnlPrincipal, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(pnlPrincipal, javax.swing.GroupLayout.DEFAULT_SIZE, 554, Short.MAX_VALUE)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btnArchivoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnArchivoActionPerformed
        elegirArchivo(txtArchivo);
    }//GEN-LAST:event_btnArchivoActionPerformed

    private void btnUbicacionActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnUbicacionActionPerformed
        elegirCarpeta(txtUbicacion);
    }//GEN-LAST:event_btnUbicacionActionPerformed

    private void rellenarComboBox() {
        File carpeta = new File("C:\\Users\\Cesar\\Documents\\NetBeansProjects\\PruebaLista");
        //System.out.println(carpeta.getName());
        File[] archivos = carpeta.listFiles();
        //System.out.println("Numero de archivos " + archivos.length);

        comboLista.removeAllItems();
        for (File archivo : archivos) {
            //System.out.println(archivo.getName());
            comboLista.addItem(archivo.getName());
        }
    }

    private void elegirArchivo(JTextField nombre) {
        JFileChooser fileChooser = new JFileChooser();
        fileChooser.setFileSelectionMode(JFileChooser.FILES_AND_DIRECTORIES);

        int result = fileChooser.showOpenDialog(this);

        if (result != JFileChooser.CANCEL_OPTION) {
            File fileName = fileChooser.getSelectedFile();

            if ((fileName == null) || (fileName.getName().equals(""))) {
                nombre.setText("...");
            } else {
                String archivo = fileName.getAbsolutePath();
                int replace = archivo.length() - archivo.replace("\\", "").length();
                archivo = archivo.replace("\\", "-");
                String[] parts = archivo.split("-");
                nombre.setText(parts[replace]);
            }
        }
    }

    private void elegirCarpeta(JTextField nombre) {
        JFileChooser fileChooser = new JFileChooser();
        fileChooser.setFileSelectionMode(JFileChooser.DIRECTORIES_ONLY);

        int result = fileChooser.showOpenDialog(this);

        if (result != JFileChooser.CANCEL_OPTION) {
            File fileName = fileChooser.getSelectedFile();

            if ((fileName == null) || (fileName.getName().equals(""))) {
                nombre.setText("...");
            } else {
                nombre.setText(fileName.getAbsolutePath());
                String nombreFinal = fileName.getAbsolutePath() + "/lrgs18032024-010.log";
                lblNombreFinal.setText(nombreFinal);
            }
        }
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnArchivo;
    private javax.swing.JButton btnUbicacion;
    private javax.swing.JComboBox<String> comboIP;
    private javax.swing.JComboBox<String> comboLista;
    private javax.swing.JLabel lblArchivo;
    private javax.swing.JLabel lblEstaciones;
    private javax.swing.JLabel lblHora;
    private javax.swing.JLabel lblIP;
    private javax.swing.JLabel lblMinutos;
    private javax.swing.JLabel lblNombreFinal;
    private javax.swing.JLabel lblTitulo;
    private javax.swing.JLabel lblTituloTarea;
    private javax.swing.JLabel lblUbicacion;
    private javax.swing.JPanel pnlGeneral;
    private javax.swing.JPanel pnlHorario;
    private javax.swing.JPanel pnlInformacion;
    private javax.swing.JPanel pnlPrincipal;
    private javax.swing.JTextField txtArchivo;
    private javax.swing.JTextField txtHora;
    private javax.swing.JTextField txtMinutos;
    private javax.swing.JTextField txtTituloTarea;
    private javax.swing.JTextField txtUbicacion;
    // End of variables declaration//GEN-END:variables
}
